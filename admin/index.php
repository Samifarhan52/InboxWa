<?php
header('Content-Type: text/plain; charset=utf-8');
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Loaded modules:\n" . @shell_exec('php -m') . "\n";
echo "Which php: " . @shell_exec('which php') . "\n";
echo "Installed php packages:\n" . @shell_exec('dpkg -l | grep php') . "\n";
exit;
