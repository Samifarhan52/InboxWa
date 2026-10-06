<?php
header('Content-Type: text/plain; charset=utf-8');
echo "PHP Version: " . PHP_VERSION . "\n";
echo "PDO Drivers: " . implode(', ', PDO::getAvailableDrivers()) . "\n";
echo "SQLite3 class exists: " . (class_exists('SQLite3') ? 'YES' : 'NO') . "\n";
echo "JSON extension: " . (extension_loaded('json') ? 'YES' : 'NO') . "\n";
echo "disable_functions: " . ini_get('disable_functions') . "\n";
echo "exec callable: " . (is_callable('exec') ? 'YES' : 'NO') . "\n";
echo "whoami: " . (is_callable('exec') ? @exec('whoami') : 'N/A') . "\n";
exit;
