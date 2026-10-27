<?php
require __DIR__ . '/../config/init.php';

function back($msg, $old = []) {
    flash('error', $msg);
    $_SESSION['old'] = $old;
    header('Location: claim.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: claim.php'); exit(); }
if (!csrf_ok()) back('Your session expired. Send it again.');

if (trim($_POST['company'] ?? '') !== '') {
    flash('success', 'You are on the list.');
    header('Location: claim.php');
    exit();
}

$name  = preg_replace('/\s+/', ' ', trim($_POST['name'] ?? ''));
$email = strtolower(trim($_POST['email'] ?? ''));
$phone = trim($_POST['phone'] ?? '');
$old = ['name' => $name, 'email' => $email, 'phone' => $phone];

if (mb_strlen($name) < 2 || mb_strlen($name) > 120) back('Enter the name you want on the card.', $old);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 255) back('Enter a real email address.', $old);
$digits = preg_replace('/\D/', '', $phone);
if (strlen($phone) > 40 || strlen($digits) < 7 || strlen($digits) > 15) back('Enter a phone number we can actually dial.', $old);

$conn = db_soft();
if (!$conn) back('We could not save that just now. Try again in a minute.', $old);
ensure_leads($conn);

$before = $conn->query('SELECT COUNT(*) c FROM leads');
$have = $before ? (int)$before->fetch_assoc()['c'] : 0;

$stmt = $conn->prepare('INSERT INTO leads (name, email, phone) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $name, $email, $phone);
if (!$stmt->execute()) {
    if ($stmt->errno === 1062) back('That email is already on the list. One card per person.', $old);
    error_log('Lead error: ' . $stmt->error);
    back('Something went wrong. Please try again.', $old);
}

$number = $have + 1;
if ($number <= 100) {
    $_SESSION['card_no'] = $number;
    flash('success', 'You are guest ' . $number . ' of 100. This card is your ticket. Show it at the gate.');
} else {
    $_SESSION['card_no'] = 0;
    flash('success', 'The 100 cards are already out. We saved your name, email, and phone in case one opens up.');
}
unset($_SESSION['old']);
header('Location: claim.php');
exit();
