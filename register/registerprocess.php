<?php
require __DIR__ . '/../config/init.php';

function back($msg, $old = []) { flash('error', $msg); $_SESSION['old'] = $old; header('Location: register.php'); exit(); }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: register.php'); exit(); }
if (!csrf_ok()) back('Your session expired. Please try again.');

$username = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$old = ['username' => $username, 'email' => $email];

if (!preg_match('/^[A-Za-z0-9_.-]{3,50}$/', $username)) back('Username must be 3 to 50 characters: letters, numbers, dots, dashes or underscores.', $old);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 255) back('Enter a valid email address.', $old);
if (strlen($password) < 8) back('Password must be at least 8 characters.', $old);

$conn = db();
$hashed = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare('INSERT INTO customers (username, email, password) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $username, $email, $hashed);

if ($stmt->execute()) {
    flash('success', 'Account created. Log in to open your dashboard.');
    header('Location: ../login/login.php');
    exit();
}

if ($stmt->errno === 1062) {
    back('That username or email is already registered.', $old);
}
error_log('Register error: ' . $stmt->error);
back('Something went wrong. Please try again.', $old);
