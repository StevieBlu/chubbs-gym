<?php
require __DIR__ . '/../config/init.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: login.php'); exit(); }
if (!csrf_ok()) { flash('error', 'Your session expired. Please try again.'); header('Location: login.php'); exit(); }

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $password === '') {
    flash('error', 'Enter your username and password.');
    header('Location: login.php'); exit();
}

$conn = db();
$stmt = $conn->prepare('SELECT username, password FROM customers WHERE username = ?');
$stmt->bind_param('s', $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

// One generic message so attackers cannot tell which usernames exist.
if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id(true);
    $_SESSION['username'] = $user['username'];
    header('Location: ../dashboard/dashboard.php');
    exit();
}

flash('error', 'Invalid username or password.');
header('Location: login.php');
exit();
