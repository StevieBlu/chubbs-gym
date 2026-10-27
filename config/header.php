<?php
// Expects: $base ('' or '../'), $title
$base  = $base ?? '';
$title = $title ?? 'Chubbs Gym';
$in    = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Chubbs Gym: personal training, group classes and nutrition coaching, built around you.">
  <title><?= e($title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= e($base) ?>style/style.css">
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="site-header">
  <div class="wrap bar">
    <a class="brand" href="<?= e($base) ?>index.php">CHUBBS<b>GYM</b><small>MEMBER CLUB</small></a>
    <button class="menu-btn" aria-expanded="false" aria-controls="nav" aria-label="Menu">Menu</button>
    <nav id="nav" class="nav">
      <a href="<?= e($base) ?>index.php#home">Home</a>
      <a href="<?= e($base) ?>index.php#about">About</a>
      <a href="<?= e($base) ?>index.php#services">Services</a>
      <a href="<?= e($base) ?>index.php#resources">Member resources</a>
      <a href="<?= e($base) ?>gallery.php">Gallery</a>
      <?php if ($in): ?>
        <a href="<?= e($base) ?>dashboard/dashboard.php">Dashboard</a>
        <a class="btn btn-sm" href="<?= e($base) ?>logout/logout.php">Log out</a>
      <?php else: ?>
        <a href="<?= e($base) ?>login/login.php">Log in</a>
        <a class="btn btn-sm" href="<?= e($base) ?>register/register.php">Join now</a>
      <?php endif; ?>
    </nav>
  </div>
</header>
<main id="main">
