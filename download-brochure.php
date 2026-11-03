<?php
declare(strict_types=1);

$candidates = [
    __DIR__ . '/public/assets/downloads/hellobotz-brochure.pdf',
    __DIR__ . '/assets/downloads/hellobotz-brochure.pdf',
    __DIR__ . '/public/assets/docs/hellobotz-brochure.pdf',
    __DIR__ . '/assets/docs/hellobotz-brochure.pdf',
    dirname(__DIR__) . '/public/assets/downloads/hellobotz-brochure.pdf',
    dirname(__DIR__) . '/assets/downloads/hellobotz-brochure.pdf'
];

$file = null;
foreach ($candidates as $c) {
    if (file_exists($c)) {
        $file = $c;
        break;
    }
}

if (!$file) {
    http_response_code(404);
    echo "Brochure file not found.";
    exit;
}

// Clean any previous output buffer to avoid corrupting PDF binary stream
if (ob_get_level()) {
    ob_end_clean();
}

header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="HelloBotz_Official_Brochure.pdf"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($file));

readfile($file);
exit;
