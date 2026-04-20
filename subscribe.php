<?php
/**
 * Newsletter Subscribe Endpoint
 * Adds a contact to Hostinger Reach via the public API.
 * POST /subscribe.php  { "email": "..." }
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

require_once __DIR__ . '/config.php';

// Parse input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || empty($input['email'])) {
    http_response_code(422);
    echo json_encode(['error' => 'Email is required']);
    exit;
}

$email = filter_var(trim($input['email']), FILTER_VALIDATE_EMAIL);
if (!$email) {
    http_response_code(422);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Rate limiting: simple file-based per-IP (1 request per 10 seconds)
$rateLimitDir = sys_get_temp_dir() . '/newsletter_ratelimit';
if (!is_dir($rateLimitDir)) {
    mkdir($rateLimitDir, 0700, true);
}
$ipHash = hash('sha256', $_SERVER['REMOTE_ADDR'] ?? 'unknown');
$rateLimitFile = $rateLimitDir . '/' . $ipHash;
if (file_exists($rateLimitFile) && (time() - filemtime($rateLimitFile)) < 10) {
    http_response_code(429);
    echo json_encode(['error' => 'Too many requests. Please wait a moment.']);
    exit;
}
touch($rateLimitFile);

// Build Reach API request
$url = 'https://developers.hostinger.com/api/reach/v1/profiles/' 
     . urlencode(REACH_PROFILE_UUID) . '/contacts';

$payload = ['email' => $email];

// Include name if provided
if (!empty($input['name'])) {
    $name = trim($input['name']);
    if (mb_strlen($name) <= 100) {
        $payload['name'] = $name;
    }
}

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($payload),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 15,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . REACH_API_TOKEN,
    ],
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError) {
    http_response_code(502);
    echo json_encode(['error' => 'Could not connect to email service']);
    exit;
}

if ($httpCode >= 200 && $httpCode < 300) {
    echo json_encode(['success' => true, 'message' => 'You\'re subscribed!']);
} elseif ($httpCode === 422) {
    // Validation error from Reach (e.g. duplicate email)
    $body = json_decode($response, true);
    $msg = $body['message'] ?? 'This email may already be subscribed.';
    http_response_code(422);
    echo json_encode(['error' => $msg]);
} else {
    http_response_code(502);
    echo json_encode(['error' => 'Subscription failed. Please try again later.']);
}
