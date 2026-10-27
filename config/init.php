<?php
// Shared setup: session, helpers, database. Include this first on every page.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function db() {
    static $conn = null;
    if ($conn) return $conn;
    $cfg = require __DIR__ . '/db.local.php';
    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = @new mysqli($cfg['host'], $cfg['user'], $cfg['pass'], $cfg['name']);
    if ($conn->connect_error) {
        error_log('DB connection failed: ' . $conn->connect_error);
        http_response_code(500);
        die('We could not reach the database. Please try again later.');
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}

function csrf_token() {
    if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf'];
}
function csrf_field() { return '<input type="hidden" name="csrf" value="' . e(csrf_token()) . '">'; }
function csrf_ok() {
    return isset($_POST['csrf'], $_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $_POST['csrf']);
}

function flash($type, $msg) { $_SESSION['flash'] = ['type' => $type, 'msg' => $msg]; }
function take_flash() {
    $f = $_SESSION['flash'] ?? null;
    unset($_SESSION['flash']);
    return $f;
}

// Shows an <img> if the file exists, otherwise a styled placeholder.
function pic($base, $file, $alt, $class = '') {
    $path = __DIR__ . '/../images/' . $file;
    if (file_exists($path)) {
        return '<img src="' . e($base) . 'images/' . e($file) . '?v=' . filemtime($path) . '" alt="' . e($alt) . '" class="' . e($class) . '">';
    }
    return '<div class="ph ' . e($class) . '" role="img" aria-label="' . e($alt) . '"><span>' . e($alt) . '</span></div>';
}
