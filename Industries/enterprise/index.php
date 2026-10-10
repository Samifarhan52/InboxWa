<?php
$slug = basename(__DIR__);
$pubHtml = dirname(__DIR__, 2) . '/public/Industries/' . $slug . '/index.html';
if (file_exists($pubHtml)) {
    readfile($pubHtml);
    exit;
}
