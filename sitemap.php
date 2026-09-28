<?php
declare(strict_types=1);

header('Content-Type: application/xml; charset=utf-8');
header('Cache-Control: public, max-age=3600');

$xmlFile = __DIR__ . '/sitemap.xml';
if (file_exists($xmlFile)) {
    readfile($xmlFile);
} else {
    http_response_code(404);
    echo '<?xml version="1.0" encoding="UTF-8"?><error>Sitemap not found</error>';
}
exit;
