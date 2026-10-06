<?php
/**
 * Admin Panel Entrypoint - Diagnostic & Safe Loader
 */
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

register_shutdown_function(function() {
    $error = error_get_last();
    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        header('Content-Type: text/plain; charset=utf-8', true, 200);
        echo "=== HELLOBOTZ ADMIN DIAGNOSTIC ERROR ===\n";
        echo "Message: " . $error['message'] . "\n";
        echo "File:    " . $error['file'] . "\n";
        echo "Line:    " . $error['line'] . "\n";
        echo "Type:    " . $error['type'] . "\n";
    }
});

require_once __DIR__ . '/../secure-console-x7/index.php';
