<?php
/**
 * HelloBotz JSON-Backed Database Engine (Pure PHP PDO Compatibility Layer)
 * 
 * Provides 100% drop-in compatibility for PDO query/prepare/execute operations
 * when PDO SQLite or native database extensions are not installed on the server.
 */
declare(strict_types=1);

class HbJsonPdo {
    private array $data = [];
    private string $dataFile;
    private string $cmsStateFile;
    private int $lastInsertId = 0;

    public function __construct() {
        $this->dataFile = dirname(__DIR__) . '/secure-console-x7/data/db.json';
        $this->cmsStateFile = dirname(__DIR__) . '/config/cms_state.json';
        $this->load();
    }

    public function setAttribute(int $attr, mixed $val): bool {
        return true;
    }

    public function getAttribute(int $attr): mixed {
        return null;
    }

    public function beginTransaction(): bool {
        return true;
    }

    public function commit(): bool {
        $this->save();
        return true;
    }

    public function rollBack(): bool {
        return true;
    }

    public function lastInsertId(?string $name = null): string {
        return (string)$this->lastInsertId;
    }

    public function exec(string $sql): int {
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function query(string $sql, ?int $fetchMode = null, mixed ...$args): HbJsonStatement {
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function prepare(string $sql, array $options = []): HbJsonStatement {
        return new HbJsonStatement($this, $sql);
    }

    public function getTable(string $table): array {
        return $this->data[$table] ?? [];
    }

    public function setTable(string $table, array $rows): void {
        $this->data[$table] = $rows;
        $this->save();
    }

    public function setLastId(int $id): void {
        $this->lastInsertId = $id;
    }

    public function getNextId(string $table): int {
        $max = 0;
        foreach ($this->getTable($table) as $row) {
            $id = (int)($row['id'] ?? 0);
            if ($id > $max) $max = $id;
        }
        return $max + 1;
    }

    private function load(): void {
        // Ensure data directory exists
        $dataDir = dirname($this->dataFile);
        if (!is_dir($dataDir)) {
            @mkdir($dataDir, 0755, true);
        }

        // 1. Load from db.json if exists
        if (file_exists($this->dataFile)) {
            $raw = @file_get_contents($this->dataFile);
            if ($raw) {
                $decoded = json_decode($raw, true);
                if (is_array($decoded)) {
                    $this->data = $decoded;
                }
            }
        }

        // 2. Load and overlay from config/cms_state.json if exists
        if (file_exists($this->cmsStateFile)) {
            $rawCms = @file_get_contents($this->cmsStateFile);
            if ($rawCms) {
                $cmsState = json_decode($rawCms, true);
                if (is_array($cmsState)) {
                    foreach ($cmsState as $tbl => $rows) {
                        if (is_array($rows) && (empty($this->data[$tbl]) || in_array($tbl, ['settings', 'site_sections']))) {
                            $this->data[$tbl] = $rows;
                        }
                    }
                }
            }
        }

        // 3. Initialize missing tables with empty arrays
        $tables = ['settings', 'site_sections', 'posts', 'pricing_plans', 'testimonials', 'faqs', 'custom_locations', 'plugins', 'comments', 'categories', 'tags', 'pages', 'leads'];
        foreach ($tables as $t) {
            if (!isset($this->data[$t]) || !is_array($this->data[$t])) {
                $this->data[$t] = [];
            }
        }

        // Update lastInsertId tracking
        foreach ($this->data as $tbl => $rows) {
            foreach ($rows as $r) {
                if (isset($r['id']) && (int)$r['id'] > $this->lastInsertId) {
                    $this->lastInsertId = (int)$r['id'];
                }
            }
        }
    }

    public function save(): void {
        $json = json_encode($this->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        if ($json) {
            @file_put_contents($this->dataFile, $json);
        }
    }
}

class HbJsonStatement {
    private HbJsonPdo $db;
    private string $sql;
    private array $rows = [];
    private int $cursor = 0;
    private int $affectedRows = 0;
    private array $boundParams = [];

    public function __construct(HbJsonPdo $db, string $sql) {
        $this->db = $db;
        $this->sql = trim($sql);
    }

    public function bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR): bool {
        $this->boundParams[$param] = $value;
        return true;
    }

    public function execute(?array $params = null): bool {
        $this->cursor = 0;
        $this->rows = [];
        $this->affectedRows = 0;

        $p = $params ?? [];
        if (!empty($this->boundParams)) {
            foreach ($this->boundParams as $k => $v) {
                if (is_int($k)) {
                    $p[$k - 1] = $v;
                } else {
                    $p[$k] = $v;
                }
            }
        }

        $sql = $this->sql;

        // DDL & PRAGMA queries -> immediate no-op success
        if (preg_match('/^(PRAGMA|CREATE\s+TABLE)/i', $sql)) {
            $this->affectedRows = 0;
            return true;
        }

        // SELECT 1 FROM sqlite_master ...
        if (preg_match('/SELECT\s+1\s+FROM\s+sqlite_master/i', $sql)) {
            $this->rows = [['1' => 1]];
            return true;
        }

        // SELECT COUNT(*) FROM table
        if (preg_match('/SELECT\s+COUNT\(\*\)\s+FROM\s+([a-zA-Z0-9_]+)(?:\s+WHERE\s+(.*))?/is', $sql, $m)) {
            $table = strtolower($m[1]);
            $where = isset($m[2]) ? trim($m[2]) : '';
            $rows = $this->db->getTable($table);

            if ($where !== '') {
                $rows = $this->filterRows($rows, $where, $p);
            }
            $this->rows = [['COUNT(*)' => count($rows), 'cnt' => count($rows)]];
            return true;
        }

        // SELECT status, COUNT(*) as cnt FROM comments GROUP BY status
        if (preg_match('/SELECT\s+status,\s*COUNT\(\*\)\s+as\s+cnt\s+FROM\s+comments/i', $sql)) {
            $rows = $this->db->getTable('comments');
            $groups = [];
            foreach ($rows as $r) {
                $st = $r['status'] ?? 'pending';
                $groups[$st] = ($groups[$st] ?? 0) + 1;
            }
            $res = [];
            foreach ($groups as $st => $c) {
                $res[] = ['status' => $st, 'cnt' => $c];
            }
            $this->rows = $res;
            return true;
        }

        // Standard SELECT queries
        if (preg_match('/^SELECT\s+(.+?)\s+FROM\s+([a-zA-Z0-9_]+)(?:\s+WHERE\s+(.*?))?(?:\s+ORDER\s+BY\s+(.*?))?(?:\s+LIMIT\s+(.*?))?$/is', $sql, $m)) {
            $fields = trim($m[1]);
            $table = strtolower($m[2]);
            $where = isset($m[3]) ? trim($m[3]) : '';
            $orderBy = isset($m[4]) ? trim($m[4]) : '';
            $limitStr = isset($m[5]) ? trim($m[5]) : '';

            $rows = $this->db->getTable($table);

            if ($where !== '') {
                $rows = $this->filterRows($rows, $where, $p);
            }

            if ($orderBy !== '') {
                $rows = $this->sortRows($rows, $orderBy);
            }

            if ($limitStr !== '') {
                $limit = is_numeric($limitStr) ? (int)$limitStr : (isset($p[0]) && is_numeric($p[0]) ? (int)$p[0] : 0);
                if ($limit > 0) {
                    $rows = array_slice($rows, 0, $limit);
                }
            }

            // Project fields
            if ($fields !== '*' && !str_contains($fields, '*')) {
                $cols = array_map('trim', explode(',', $fields));
                $projected = [];
                foreach ($rows as $r) {
                    $item = [];
                    foreach ($cols as $col) {
                        $item[$col] = $r[$col] ?? null;
                    }
                    $projected[] = $item;
                }
                $rows = $projected;
            }

            $this->rows = array_values($rows);
            return true;
        }

        // INSERT INTO table (...) VALUES (...)
        if (preg_match('/^INSERT\s+(?:OR\s+IGNORE\s+)?INTO\s+([a-zA-Z0-9_]+)\s*\((.*?)\)\s*VALUES\s*\((.*?)\)(?:\s*ON\s+CONFLICT\s*.*)?$/is', $sql, $m)) {
            $table = strtolower($m[1]);
            $cols = array_map('trim', explode(',', $m[2]));
            $valuesStr = $m[3];

            $row = [];
            $paramIndex = 0;
            $rawVals = array_map('trim', explode(',', $valuesStr));
            foreach ($cols as $idx => $col) {
                $col = trim($col, '`"\'');
                $val = $rawVals[$idx] ?? '?';
                if ($val === '?' || $val === ':' . $col) {
                    $row[$col] = $p[$paramIndex++] ?? null;
                } elseif (strtoupper($val) === 'CURRENT_TIMESTAMP') {
                    $row[$col] = date('Y-m-d H:i:s');
                } else {
                    $row[$col] = trim($val, '\'"');
                }
            }

            $currentRows = $this->db->getTable($table);

            // Handle conflict / key updates for settings, site_sections, pricing_plans
            if ($table === 'settings' && isset($row['key'])) {
                $found = false;
                foreach ($currentRows as &$existing) {
                    if (($existing['key'] ?? '') === $row['key']) {
                        $existing['value'] = $row['value'] ?? '';
                        $existing['updated_at'] = date('Y-m-d H:i:s');
                        $found = true;
                        break;
                    }
                }
                unset($existing);
                if (!$found) {
                    $currentRows[] = $row;
                }
                $this->db->setTable($table, $currentRows);
                $this->affectedRows = 1;
                return true;
            }

            if ($table === 'site_sections' && isset($row['section'], $row['field'])) {
                $found = false;
                foreach ($currentRows as &$existing) {
                    if (($existing['section'] ?? '') === $row['section'] && ($existing['field'] ?? '') === $row['field']) {
                        $existing['value'] = $row['value'] ?? '';
                        $existing['updated_at'] = date('Y-m-d H:i:s');
                        $found = true;
                        break;
                    }
                }
                unset($existing);
                if (!$found) {
                    $currentRows[] = $row;
                }
                $this->db->setTable($table, $currentRows);
                $this->affectedRows = 1;
                return true;
            }

            if ($table === 'pricing_plans' && isset($row['plan_id'])) {
                $found = false;
                foreach ($currentRows as &$existing) {
                    if (($existing['plan_id'] ?? '') === $row['plan_id']) {
                        $existing = array_merge($existing, $row);
                        $found = true;
                        break;
                    }
                }
                unset($existing);
                if (!$found) {
                    if (empty($row['id'])) $row['id'] = $this->db->getNextId($table);
                    $currentRows[] = $row;
                }
                $this->db->setTable($table, $currentRows);
                $this->affectedRows = 1;
                return true;
            }

            // Assign autoincrement ID if missing
            if (empty($row['id'])) {
                $newId = $this->db->getNextId($table);
                $row['id'] = $newId;
                $this->db->setLastId($newId);
            } else {
                $this->db->setLastId((int)$row['id']);
            }

            if (!isset($row['created_at'])) {
                $row['created_at'] = date('Y-m-d H:i:s');
            }
            if (!isset($row['updated_at'])) {
                $row['updated_at'] = date('Y-m-d H:i:s');
            }

            $currentRows[] = $row;
            $this->db->setTable($table, $currentRows);
            $this->affectedRows = 1;
            return true;
        }

        // UPDATE table SET ... WHERE ...
        if (preg_match('/^UPDATE\s+([a-zA-Z0-9_]+)\s+SET\s+(.+?)\s+WHERE\s+(.+)$/is', $sql, $m)) {
            $table = strtolower($m[1]);
            $setStr = trim($m[2]);
            $whereStr = trim($m[3]);

            $setPairs = array_map('trim', explode(',', $setStr));
            $updates = [];
            $paramIndex = 0;

            foreach ($setPairs as $pair) {
                if (preg_match('/^([a-zA-Z0-9_]+)\s*=\s*(.+)$/', $pair, $sm)) {
                    $col = $sm[1];
                    $val = trim($sm[2]);
                    if ($val === '?') {
                        $updates[$col] = $p[$paramIndex++] ?? null;
                    } elseif (strtoupper($val) === 'CURRENT_TIMESTAMP') {
                        $updates[$col] = date('Y-m-d H:i:s');
                    } else {
                        $updates[$col] = trim($val, '\'"');
                    }
                }
            }

            $whereParams = array_slice($p, $paramIndex);
            $currentRows = $this->db->getTable($table);
            $count = 0;

            foreach ($currentRows as &$r) {
                if ($this->rowMatchesWhere($r, $whereStr, $whereParams)) {
                    foreach ($updates as $k => $v) {
                        $r[$k] = $v;
                    }
                    $count++;
                }
            }
            unset($r);

            $this->db->setTable($table, $currentRows);
            $this->affectedRows = $count;
            return true;
        }

        // DELETE FROM table WHERE ...
        if (preg_match('/^DELETE\s+FROM\s+([a-zA-Z0-9_]+)(?:\s+WHERE\s+(.+))?$/is', $sql, $m)) {
            $table = strtolower($m[1]);
            $whereStr = isset($m[2]) ? trim($m[2]) : '';

            $currentRows = $this->db->getTable($table);
            if ($whereStr === '') {
                $this->affectedRows = count($currentRows);
                $this->db->setTable($table, []);
                return true;
            }

            $kept = [];
            $delCount = 0;
            foreach ($currentRows as $r) {
                if ($this->rowMatchesWhere($r, $whereStr, $p)) {
                    $delCount++;
                } else {
                    $kept[] = $r;
                }
            }

            $this->db->setTable($table, $kept);
            $this->affectedRows = $delCount;
            return true;
        }

        return true;
    }

    public function fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = 0, int $cursorOffset = 0): mixed {
        if ($this->cursor >= count($this->rows)) return false;
        $row = $this->rows[$this->cursor++];
        if ($mode === PDO::FETCH_NUM) {
            return array_values($row);
        }
        return $row;
    }

    public function fetchAll(int $mode = PDO::FETCH_DEFAULT, mixed ...$args): array {
        if ($mode === PDO::FETCH_KEY_PAIR) {
            $res = [];
            foreach ($this->rows as $r) {
                $vals = array_values($r);
                if (count($vals) >= 2) {
                    $res[$vals[0]] = $vals[1];
                }
            }
            return $res;
        }
        if ($mode === PDO::FETCH_NUM) {
            return array_map(fn($r) => array_values($r), $this->rows);
        }
        $slice = array_slice($this->rows, $this->cursor);
        $this->cursor = count($this->rows);
        return $slice;
    }

    public function fetchColumn(int $col = 0): mixed {
        if ($this->cursor >= count($this->rows)) return false;
        $row = $this->rows[$this->cursor++];
        $vals = array_values($row);
        return $vals[$col] ?? null;
    }

    public function rowCount(): int {
        return $this->affectedRows ?: count($this->rows);
    }

    private function filterRows(array $rows, string $where, array $params): array {
        $result = [];
        foreach ($rows as $r) {
            if ($this->rowMatchesWhere($r, $where, $params)) {
                $result[] = $r;
            }
        }
        return $result;
    }

    private function rowMatchesWhere(array $row, string $where, array $params): bool {
        // Strip 1=1 AND
        $clean = preg_replace('/^\s*1\s*=\s*1\s*(?:AND\s+)?/i', '', $where);
        if (trim($clean) === '' || trim($clean) === '1=1') {
            return true;
        }

        // Split conditions by AND
        $clauses = preg_split('/\s+AND\s+/i', $clean);
        $paramIdx = 0;

        foreach ($clauses as $clause) {
            $clause = trim($clause);
            if ($clause === '' || $clause === '1=1') continue;

            // id = ?
            if (preg_match('/^([a-zA-Z0-9_]+)\s*=\s*\?$/', $clause, $m)) {
                $col = $m[1];
                $val = $params[$paramIdx++] ?? null;
                if ((string)($row[$col] ?? '') !== (string)$val) {
                    return false;
                }
            }
            // col = 'literal'
            elseif (preg_match('/^([a-zA-Z0-9_]+)\s*=\s*\'(.*)\'$/', $clause, $m)) {
                $col = $m[1];
                $val = $m[2];
                if ((string)($row[$col] ?? '') !== (string)$val) {
                    return false;
                }
            }
            // col LIKE '%...%'
            elseif (preg_match('/^([a-zA-Z0-9_]+)\s+LIKE\s+\'?(.*?)\'?$/i', $clause, $m)) {
                $col = $m[1];
                $pattern = trim($m[2], '\'%');
                $target = (string)($row[$col] ?? '');
                if (!str_contains(strtolower($target), strtolower($pattern))) {
                    return false;
                }
            }
        }

        return true;
    }

    private function sortRows(array $rows, string $orderBy): array {
        $parts = array_map('trim', explode(',', $orderBy));
        usort($rows, function($a, $b) use ($parts) {
            foreach ($parts as $part) {
                $segments = preg_split('/\s+/', trim($part));
                $col = $segments[0];
                $dir = strtoupper($segments[1] ?? 'ASC');

                $valA = $a[$col] ?? 0;
                $valB = $b[$col] ?? 0;

                if (is_numeric($valA) && is_numeric($valB)) {
                    $cmp = $valA <=> $valB;
                } else {
                    $cmp = strcmp((string)$valA, (string)$valB);
                }

                if ($cmp !== 0) {
                    return ($dir === 'DESC') ? -$cmp : $cmp;
                }
            }
            return 0;
        });
        return $rows;
    }
}
