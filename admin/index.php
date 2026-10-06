<?php
header('Content-Type: text/plain; charset=utf-8');
class HbMockPdo extends PDO {
    public function __construct() {}
}
try {
    $m = new HbMockPdo();
    echo "HbMockPdo created: " . (is_a($m, 'PDO') ? 'YES' : 'NO') . "\n";
} catch (Throwable $e) {
    echo "HbMockPdo error: " . $e->getMessage() . "\n";
}
exit;
