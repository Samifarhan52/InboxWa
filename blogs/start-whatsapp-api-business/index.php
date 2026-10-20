<?php
$slug = basename(__DIR__);
$pubHtml = dirname(__DIR__, 2) . '/public/blogs/' . $slug . '/index.html';
if (file_exists($pubHtml)) {
    readfile($pubHtml);
    exit;
}
$pubResHtml = dirname(__DIR__, 2) . '/public/resources/blog/' . $slug . '/index.html';
if (file_exists($pubResHtml)) {
    readfile($pubResHtml);
    exit;
}
require_once dirname(__DIR__, 2) . '/resources/blog/' . $slug . '/index.php';
