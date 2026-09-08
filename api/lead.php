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

require dirname(__DIR__) . '/secure-console-x7/config.php';

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

$name = trim((string)($input['name'] ?? ''));
$email = trim((string)($input['email'] ?? ''));
$phone = trim((string)($input['phone'] ?? $input['whatsapp'] ?? ''));
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

$type = preg_replace('/[^a-z_]/', '', strtolower((string)($input['type'] ?? 'contact'))) ?: 'contact';
$allowed = ['contact','demo','callback','offer','partner','product','addon'];
if (!in_array($type, $allowed, true)) $type = 'contact';

try {
  $db = hb_pdo();
  $db->prepare('INSERT INTO leads (
    type, name, business, email, phone, whatsapp, country, city, product, requirement, message,
    preferred_date, preferred_time, source_page, referrer, utm_source, utm_medium, utm_campaign, ip, status
  ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)')->execute([
    $type,
    $name,
    trim((string)($input['business'] ?? '')),
    $email,
    $phone,
    trim((string)($input['whatsapp'] ?? '')),
    trim((string)($input['country'] ?? '')),
    trim((string)($input['city'] ?? '')),
    trim((string)($input['product'] ?? '')),
    trim((string)($input['requirement'] ?? '')),
    trim((string)($input['message'] ?? '')),
    trim((string)($input['preferred_date'] ?? '')),
    trim((string)($input['preferred_time'] ?? '')),
    trim((string)($input['source_page'] ?? ($_SERVER['HTTP_REFERER'] ?? ''))),
    trim((string)($input['referrer'] ?? '')),
    trim((string)($input['utm_source'] ?? '')),
    trim((string)($input['utm_medium'] ?? '')),
    trim((string)($input['utm_campaign'] ?? '')),
    $ip,
    'new',
  ]);
  echo json_encode(['ok' => true, 'id' => (int)$db->lastInsertId()]);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'error' => 'Could not save submission']);
}
