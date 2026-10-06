<?php
header('Content-Type: text/plain; charset=utf-8');
class HbStmtSub extends PDOStatement {
    public function __construct() {}
}
try {
    $s = new HbStmtSub();
    echo "HbStmtSub created: " . (is_a($s, 'PDOStatement') ? 'YES' : 'NO') . "\n";
} catch (Throwable $e) {
    echo "HbStmtSub error: " . $e->getMessage() . "\n";
}
exit;
