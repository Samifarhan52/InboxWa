<?php
/**
 * Public form endpoint — saves leads to SQLite used by secure console.
 * POST JSON or form-urlencoded.
 */
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
  exit;
}

require_once dirname(__DIR__) . '/secure-console-x7/config.php';
if (file_exists(dirname(__DIR__) . '/config/cms.php')) {
  require_once dirname(__DIR__) . '/config/cms.php';
}

// Simple rate limit by IP (session-based)
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$key = 'lead_rl_' . md5($ip);
if (!isset($_SESSION[$key])) $_SESSION[$key] = ['n' => 0, 't' => time()];
if (time() - $_SESSION[$key]['t'] > 3600) $_SESSION[$key] = ['n' => 0, 't' => time()];
if ($_SESSION[$key]['n'] >= 30) {
  http_response_code(429);
  echo json_encode(['ok' => false, 'error' => 'Too many requests']);
  exit;
}
$_SESSION[$key]['n']++;

$input = $_POST;
$raw = file_get_contents('php://input');
if ($raw && str_contains($_SERVER['CONTENT_TYPE'] ?? '', 'application/json')) {
  $json = json_decode($raw, true);
  if (is_array($json)) $input = $json;
}

$name = trim((string)($input['name'] ?? $input['full_name'] ?? ''));
$email = trim((string)($input['email'] ?? ''));
$phone = trim((string)($input['phone'] ?? $input['whatsapp'] ?? $input['mobile'] ?? ''));
$business = trim((string)($input['business'] ?? $input['company'] ?? $input['business_name'] ?? ''));
$country = trim((string)($input['country'] ?? ''));
$city = trim((string)($input['city'] ?? ''));
$product = trim((string)($input['product'] ?? $input['selected_addon'] ?? ''));
$requirement = trim((string)($input['requirement'] ?? $input['regarding'] ?? $input['interest'] ?? $input['subject'] ?? ''));
$message = trim((string)($input['message'] ?? ''));
$preferred_date = trim((string)($input['preferred_date'] ?? $input['date'] ?? ''));
$preferred_time = trim((string)($input['preferred_time'] ?? $input['time'] ?? ''));
$source_page = trim((string)($input['source_page'] ?? ($_SERVER['HTTP_REFERER'] ?? '')));
$referrer = trim((string)($input['referrer'] ?? ''));
$utm_source = trim((string)($input['utm_source'] ?? ''));
$utm_medium = trim((string)($input['utm_medium'] ?? ''));
$utm_campaign = trim((string)($input['utm_campaign'] ?? ''));

if ($name === '' || ($email === '' && $phone === '')) {
  http_response_code(422);
  echo json_encode(['ok' => false, 'error' => 'Name and email or phone required']);
  exit;
}
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  echo json_encode(['ok' => false, 'error' => 'Invalid email']);
  exit;
}

$rawType = strtolower(trim((string)($input['type'] ?? 'contact')));
$type = preg_replace('/[^a-z_]/', '', $rawType) ?: 'contact';
$allowed = ['contact','demo','callback','offer','partner','product','addon','support','lead'];
if (!in_array($type, $allowed, true)) $type = 'contact';

// Determine if this is technical support or general sales/inquiry
$combinedContext = strtolower($type . ' ' . $requirement . ' ' . $message . ' ' . ($input['category'] ?? '') . ' ' . $product . ' ' . $source_page);
$isSupport = ($type === 'support')
  || str_contains($combinedContext, 'support')
  || str_contains($combinedContext, 'technical')
  || str_contains($combinedContext, 'bug')
  || str_contains($combinedContext, 'issue')
  || str_contains($combinedContext, 'api')
  || str_contains($combinedContext, 'integration')
  || str_contains($combinedContext, 'troubleshoot');

$salesEmail = function_exists('cms_setting') ? cms_setting('sales_email', 'mail@inboxwa.com') : 'mail@inboxwa.com';
$supportEmail = function_exists('cms_setting') ? cms_setting('support_email', 'support@inboxwa.com') : 'support@inboxwa.com';
$targetWa = function_exists('cms_setting') ? cms_setting('support_whatsapp', '918050854445') : '918050854445';
$targetWaFormatted = function_exists('cms_setting') ? cms_setting('phone_number', '+91 80508 54445') : '+91 80508 54445';

if ($isSupport) {
  $targetEmail = $supportEmail;
  $ccEmail = $salesEmail;
  $department = 'Technical Support';
  $badgeColor = '#EF4444';
  $badgeBg = '#FEF2F2';
} else {
  $targetEmail = $salesEmail;
  $ccEmail = $supportEmail;
  $department = 'Sales & General Enquiries';
  $badgeColor = '#8B5CF6';
  $badgeBg = '#F5F3FF';
}

try {
  $db = hb_pdo();
  $db->prepare('INSERT INTO leads (
    type, name, business, email, phone, whatsapp, country, city, product, requirement, message,
    preferred_date, preferred_time, source_page, referrer, utm_source, utm_medium, utm_campaign, ip, status
  ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)')->execute([
    $type,
    $name,
    $business,
    $email,
    $phone,
    trim((string)($input['whatsapp'] ?? $phone)),
    $country,
    $city,
    $product,
    $requirement,
    $message,
    $preferred_date,
    $preferred_time,
    $source_page,
    $referrer,
    $utm_source,
    $utm_medium,
    $utm_campaign,
    $ip,
    'new',
  ]);
  $insertedId = (int)$db->lastInsertId();

  // Format clean client phone for WhatsApp links
  $cleanPhone = preg_replace('/\\D/', '', $phone);
  $waClientLink = !empty($cleanPhone) ? 'https://wa.me/' . $cleanPhone : '';

  // Build Notification Email Subject
  if ($isSupport) {
    $mailSubject = "🚨 [Support Ticket #{$insertedId}] Technical Support Request from " . ($name ?: 'Client');
  } else {
    $mailSubject = "🚀 [New Enquiry #{$insertedId}] " . ucfirst($type) . " Request from " . ($name ?: 'Client');
  }

  // Build HTML Email for Team
  $htmlBody = '
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>' . htmlspecialchars($mailSubject) . '</title>
    <style>
      body { margin:0; padding:0; background-color:#F8FAFC; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; color:#0F172A; }
      .container { max-width:600px; margin:24px auto; background:#FFFFFF; border-radius:12px; border:1px solid #E2E8F0; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.05); }
      .header { background:linear-gradient(135deg, #0F172A 0%, #1E1B4B 100%); padding:28px 32px; color:#FFFFFF; }
      .brand { font-size:22px; font-weight:800; letter-spacing:-0.5px; margin-bottom:8px; display:flex; align-items:center; }
      .badge { display:inline-block; padding:4px 10px; border-radius:20px; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; background:' . $badgeBg . '; color:' . $badgeColor . '; border:1px solid ' . $badgeColor . '; }
      .content { padding:32px; }
      .table { width:100%; border-collapse:collapse; margin-top:16px; margin-bottom:24px; }
      .table th { text-align:left; padding:10px 12px; font-size:13px; color:#64748B; font-weight:600; width:35%; border-bottom:1px solid #F1F5F9; }
      .table td { padding:10px 12px; font-size:14px; color:#0F172A; border-bottom:1px solid #F1F5F9; font-weight:500; }
      .message-box { background:#F8FAFC; border-left:4px solid ' . $badgeColor . '; padding:16px; border-radius:0 8px 8px 0; margin-top:12px; margin-bottom:24px; font-size:14px; line-height:1.6; color:#1E293B; white-space:pre-wrap; }
      .btn { display:inline-block; padding:12px 22px; font-size:14px; font-weight:700; border-radius:8px; text-decoration:none; margin-right:8px; margin-bottom:8px; }
      .btn-wa { background:#25D366; color:#FFFFFF !important; }
      .btn-mail { background:#8B5CF6; color:#FFFFFF !important; }
      .footer { background:#F8FAFC; padding:20px 32px; border-top:1px solid #E2E8F0; font-size:12px; color:#64748B; text-align:center; }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div class="brand">InboxWa</div>
        <span class="badge">' . htmlspecialchars($department) . '</span>
        <h2 style="margin:12px 0 0 0; font-size:18px; font-weight:600; color:#FFFFFF;">' . htmlspecialchars($mailSubject) . '</h2>
      </div>
      <div class="content">
        <table class="table">
          <tr><th>Ticket / Lead ID</th><td>#' . $insertedId . '</td></tr>
          <tr><th>Category / Type</th><td><strong>' . strtoupper(htmlspecialchars($type)) . '</strong></td></tr>
          <tr><th>Contact Name</th><td>' . htmlspecialchars($name) . '</td></tr>
          <tr><th>Email Address</th><td><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></td></tr>
          <tr><th>Phone / WhatsApp</th><td><a href="tel:' . htmlspecialchars($phone) . '">' . htmlspecialchars($phone) . '</a>' . (!empty($waClientLink) ? ' &nbsp; <a href="' . htmlspecialchars($waClientLink) . '" target="_blank" style="color:#25D366; font-weight:bold;">[Chat on WhatsApp]</a>' : '') . '</td></tr>
          ' . ($business !== '' ? '<tr><th>Business / Organization</th><td>' . htmlspecialchars($business) . '</td></tr>' : '') . '
          ' . ($country !== '' ? '<tr><th>Country / Location</th><td>' . htmlspecialchars($country . ($city !== '' ? ' / ' . $city : '')) . '</td></tr>' : '') . '
          ' . ($requirement !== '' ? '<tr><th>Requirement / Subject</th><td>' . htmlspecialchars($requirement) . '</td></tr>' : '') . '
          ' . ($product !== '' ? '<tr><th>Product / Plan</th><td>' . htmlspecialchars($product) . '</td></tr>' : '') . '
          ' . ($preferred_date !== '' ? '<tr><th>Preferred Demo Date/Time</th><td>' . htmlspecialchars($preferred_date . ' ' . $preferred_time) . '</td></tr>' : '') . '
          <tr><th>Source Page</th><td>' . htmlspecialchars($source_page) . '</td></tr>
          <tr><th>Submission Time</th><td>' . date('Y-m-d H:i:s T') . '</td></tr>
          <tr><th>Client IP</th><td>' . htmlspecialchars($ip) . '</td></tr>
        </table>

        ' . ($message !== '' ? '<div style="font-weight:700; font-size:14px; margin-bottom:4px;">Message Details:</div><div class="message-box">' . nl2br(htmlspecialchars($message)) . '</div>' : '') . '

        <div style="margin-top:24px;">
          ' . (!empty($waClientLink) ? '<a href="' . htmlspecialchars($waClientLink) . '" class="btn btn-wa" target="_blank">💬 Reply on WhatsApp</a>' : '') . '
          ' . (!empty($email) ? '<a href="mailto:' . htmlspecialchars($email) . '?subject=' . urlencode('Re: Your InboxWa Request #' . $insertedId) . '" class="btn btn-mail">✉️ Reply via Email</a>' : '') . '
        </div>
      </div>
      <div class="footer">
        Automatically routed to <strong>' . htmlspecialchars($targetEmail) . '</strong> (CC: ' . htmlspecialchars($ccEmail) . ')<br>
        InboxWa Lead & Support Router • <a href="https://inboxwa.com" style="color:#64748B;">inboxwa.com</a>
      </div>
    </div>
  </body>
  </html>';

  // Send Email Notification to Admin/Team
  $headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'From: "InboxWa Alerts" <' . $targetEmail . '>',
    'X-Mailer: InboxWa-Platform/2.0'
  ];
  if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $headers[] = 'Reply-To: ' . (!empty($name) ? '"' . addslashes($name) . '" <' . $email . '>' : $email);
  }
  if (!empty($ccEmail)) {
    $headers[] = 'Cc: ' . $ccEmail;
  }

  @mail($targetEmail, $mailSubject, $htmlBody, implode("\r\n", $headers));

  // Send Automated Receipt to Client if Email is valid
  if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $clientSubject = "We have received your message - InboxWa (#{$insertedId})";
    $clientHeaders = [
      'MIME-Version: 1.0',
      'Content-Type: text/html; charset=UTF-8',
      'From: "InboxWa Team" <' . ($isSupport ? $supportEmail : $salesEmail) . '>',
      'Reply-To: ' . ($isSupport ? $supportEmail : $salesEmail),
      'X-Mailer: InboxWa-Platform/2.0'
    ];
    $clientHtml = '
    <!DOCTYPE html>
    <html>
    <head><meta charset="utf-8"></head>
    <body style="font-family:-apple-system,BlinkMacSystemFont,sans-serif;line-height:1.6;color:#1E293B;background:#F8FAFC;padding:20px;">
      <div style="max-width:560px;margin:0 auto;background:#fff;padding:28px;border-radius:12px;border:1px solid #E2E8F0;">
        <h2 style="color:#8B5CF6;margin-top:0;">Hello ' . htmlspecialchars($name) . ',</h2>
        <p>Thank you for reaching out to <strong>InboxWa</strong>! We have received your ' . htmlspecialchars($department) . ' request (Ticket #' . $insertedId . ').</p>
        <p>Our dedicated team is already reviewing your details and will get back to you shortly.</p>
        ' . ($requirement !== '' ? '<p><strong>Topic / Requirement:</strong> ' . htmlspecialchars($requirement) . '</p>' : '') . '
        <div style="background:#F1F5F9;padding:16px;border-radius:8px;margin:20px 0;">
          <p style="margin:0 0 8px 0;font-weight:600;">Need immediate assistance?</p>
          <p style="margin:0 0 12px 0;font-size:14px;color:#475569;">You can connect directly with our active team on WhatsApp:</p>
          <a href="https://wa.me/' . $targetWa . '" style="display:inline-block;padding:10px 18px;background:#25D366;color:#fff;text-decoration:none;border-radius:6px;font-weight:700;font-size:14px;">💬 Chat on WhatsApp (' . $targetWaFormatted . ')</a>
        </div>
        <p style="font-size:13px;color:#64748B;margin-top:24px;border-top:1px solid #E2E8F0;padding-top:16px;">
          Best regards,<br>
          <strong>The InboxWa Team</strong><br>
          Sales: ' . htmlspecialchars($salesEmail) . ' &bull; Technical Support: ' . htmlspecialchars($supportEmail) . '<br>
          Bangalore, India
        </p>
      </div>
    </body>
    </html>';
    @mail($email, $clientSubject, $clientHtml, implode("\r\n", $clientHeaders));
  }

  // Webhook forwarding if configured
  $webhookUrl = function_exists('cms_setting') ? cms_setting('webhook_url', '') : '';
  if (!empty($webhookUrl) && filter_var($webhookUrl, FILTER_VALIDATE_URL)) {
    @file_get_contents($webhookUrl, false, stream_context_create([
      'http' => [
        'method' => 'POST',
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode([
          'id' => $insertedId,
          'type' => $type,
          'is_support' => $isSupport,
          'name' => $name,
          'email' => $email,
          'phone' => $phone,
          'business' => $business,
          'requirement' => $requirement,
          'message' => $message,
          'source_page' => $source_page,
          'created_at' => date('Y-m-d H:i:s')
        ]),
        'timeout' => 3
      ]
    ]));
  }

  // Construct structured WhatsApp URL for client instant continuation
  $waPrefix = $isSupport ? "*InboxWa Technical Support Ticket #{$insertedId}*" : "*New Enquiry - InboxWa (#{$insertedId})*";
  $waMsg = $waPrefix . "\n\n"
    . "*Name:* " . $name . "\n"
    . (!empty($business) ? "*Company:* " . $business . "\n" : "")
    . (!empty($email) ? "*Email:* " . $email . "\n" : "")
    . (!empty($phone) ? "*Phone:* " . $phone . "\n" : "")
    . (!empty($country) ? "*Country:* " . $country . "\n" : "")
    . (!empty($requirement) ? "*Requirement:* " . $requirement . "\n" : "")
    . (!empty($product) ? "*Product/Plan:* " . $product . "\n" : "")
    . (!empty($preferred_date) ? "*Preferred Date:* " . $preferred_date . " " . $preferred_time . "\n" : "")
    . (!empty($message) ? "*Message:* " . $message : "");

  $waUrl = 'https://wa.me/' . $targetWa . '?text=' . urlencode($waMsg);

  echo json_encode([
    'ok' => true,
    'id' => $insertedId,
    'type' => $type,
    'is_support' => $isSupport,
    'target_email' => $targetEmail,
    'cc_email' => $ccEmail,
    'whatsapp_number' => $targetWa,
    'whatsapp_url' => $waUrl
  ]);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'error' => 'Could not save submission']);
}
