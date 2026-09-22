<?php
/**
 * Admin Panel Entrypoint (Public folder)
 * Automatically delegates to PHP engine if PHP is active, or fallback to client studio
 */
if (file_exists(__DIR__ . '/../../secure-console-x7/index.php')) {
    require_once __DIR__ . '/../../secure-console-x7/index.php';
} elseif (file_exists(__DIR__ . '/../secure-console-x7/index.php')) {
    require_once __DIR__ . '/../secure-console-x7/index.php';
} else {
    include __DIR__ . '/index.html';
}
