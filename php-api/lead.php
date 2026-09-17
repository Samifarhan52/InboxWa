<?php
/**
 * HelloBotz Native Lead Ingestion & Google Sheets Forwarder (PHP Backend)
 * Compatible with Hostinger, cPanel, Apache, LiteSpeed, and pure PHP environments.
 */
declare(strict_types=1);

// CORS Headers
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed. Only POST is supported.']);
    exit;
}

try {
    // Read input (JSON or Form URL-encoded)
    $rawInput = file_get_contents('php://input');
    $data = [];
    if (!empty($rawInput)) {
        $decoded = json_decode($rawInput, true);
        if (is_array($decoded)) {
            $data = $decoded;
        }
    }
    if (empty($data) && !empty($_POST)) {
        $data = $_POST;
    }

    $name = trim((string)($data['name'] ?? $data['full_name'] ?? ''));
    $email = trim((string)($data['email'] ?? ''));
    $phone = trim((string)($data['phone'] ?? $data['whatsapp'] ?? $data['mobile'] ?? ''));
    $business = trim((string)($data['business'] ?? $data['company'] ?? ''));
    $type = trim((string)($data['type'] ?? $data['lead_type'] ?? 'General Lead'));
    $product = trim((string)($data['product'] ?? $data['use_case'] ?? ''));
    $requirement = trim((string)($data['requirement'] ?? $data['volume'] ?? $data['message'] ?? ''));
    $sourcePage = trim((string)($data['source_page'] ?? $data['source'] ?? ($_SERVER['HTTP_REFERER'] ?? '')));

    if (empty($name) || (empty($email) && empty($phone))) {
        http_response_code(422);
        echo json_encode(['ok' => false, 'error' => 'Name and either Email or Phone are required.']);
        exit;
    }

    // Set Timezone to Asia/Kolkata (IST)
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date('d/m/Y, h:i:s A');

    // Intelligent Multi-Sheet Routing & Segregation:
    // Sheet 1: General Leads (Contact, Demo, Inquiries, Pricing)
    // Sheet 2: Partners (Affiliate, Agency, White Label, Technology)
    // Sheet 3: Careers (Job Applications, Internships, Freshers)
    $targetSheet = 'Sheet1';
    $category = 'General Leads';

    if (
        stripos($type, 'Job Application') !== false ||
        stripos($sourcePage, '/careers') !== false ||
        ($data['target_sheet'] ?? '') === 'Sheet3' ||
        strtolower((string)($data['category'] ?? '')) === 'careers'
    ) {
        $targetSheet = 'Sheet3';
        $category = 'Careers';
    } elseif (
        stripos($type, 'partner') !== false ||
        stripos($sourcePage, '/partners') !== false ||
        !empty($data['partner_type']) ||
        ($data['target_sheet'] ?? '') === 'Sheet2' ||
        strtolower((string)($data['category'] ?? '')) === 'partners'
    ) {
        $targetSheet = 'Sheet2';
        $category = 'Partners';
    }

    // 1. Forward to Google Sheet Webhook if configured
    $webhookUrl = getenv('GOOGLE_SHEET_WEBHOOK_URL') ?: '';
    if (empty($webhookUrl)) {
        $cfgFile = dirname(__DIR__) . '/config/leads-webhook.json';
        if (file_exists($cfgFile)) {
            $cfg = json_decode(file_get_contents($cfgFile), true);
            $webhookUrl = $cfg['google_sheet_webhook_url'] ?? '';
        }
    }

    $forwardSuccess = false;
    if (!empty($webhookUrl) && filter_var($webhookUrl, FILTER_VALIDATE_URL)) {
        $leadPayload = [
            'timestamp'       => $timestamp,
            'target_sheet'    => $targetSheet,
            'sheet_name'      => $category,
            'category'        => $category,
            'type'            => $type,
            'name'            => $name,
            'phone'           => $phone,
            'email'           => $email,
            'business'        => $business,
            'company'         => $business,
            'partner_type'    => $data['partner_type'] ?? '',
            'role'            => $data['role_category'] ?? $data['role'] ?? '',
            'target_title'    => $data['target_title'] ?? '',
            'experience'      => $data['experience'] ?? '',
            'employment_type' => $data['employment_type'] ?? '',
            'skills'          => $data['selected_skills'] ?? $data['skills'] ?? '',
            'portfolio'       => $data['portfolio'] ?? '',
            'resume_link'     => $data['resume_link'] ?? '',
            'about'           => $data['about_projects'] ?? $data['about'] ?? '',
            'why'             => $data['why_hellobotz'] ?? $data['why'] ?? '',
            'location'        => $data['location'] ?? '',
            'product'         => $product,
            'requirement'     => $requirement,
            'source_page'     => $sourcePage
        ];

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $webhookUrl,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => json_encode($leadPayload),
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 5,
            CURLOPT_TIMEOUT        => 15,
            CURLOPT_SSL_VERIFYPEER => true
        ]);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode >= 200 && $httpCode < 400) {
            $forwardSuccess = true;
        }
    }

    // 2. Optional SQLite local backup if secure-console-x7 config is available
    $cmsConfig = dirname(__DIR__) . '/secure-console-x7/config.php';
    if (file_exists($cmsConfig)) {
        try {
            require_once $cmsConfig;
            if (function_exists('hb_pdo')) {
                $pdo = hb_pdo();
                $stmt = $pdo->prepare('INSERT INTO leads (name, email, phone, business, type, product, requirement, source_page, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
                $stmt->execute([$name, $email, $phone, $business, $type, $product, $requirement, $sourcePage, date('Y-m-d H:i:s')]);
            }
        } catch (Throwable $dbErr) {
            // Non-blocking database fallback
        }
    }

    http_response_code(200);
    echo json_encode([
        'ok' => true,
        'id' => round(microtime(true) * 1000),
        'message' => 'Lead recorded successfully',
        'forwarded' => $forwardSuccess
    ]);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Internal server error: ' . $e->getMessage()]);
}
