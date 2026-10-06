<?php
header('Content-Type: text/plain; charset=utf-8');
echo "PHP Version: " . PHP_VERSION . "\n";
echo "extension_dir: " . ini_get('extension_dir') . "\n";
$soFiles = glob(ini_get('extension_dir') . '/*.so');
echo "Found .so files in extension_dir:\n" . implode("\n", $soFiles ?: []) . "\n";
$allPhpSo = glob('/usr/lib/php*/*/*.so');
echo "Found all php .so:\n" . implode("\n", $allPhpSo ?: []) . "\n";
exit;
