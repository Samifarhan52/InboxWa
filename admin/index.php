<?php
header('Content-Type: text/plain; charset=utf-8');
echo "sudo -l:\n" . @shell_exec('sudo -n -l 2>&1') . "\n";
exit;
