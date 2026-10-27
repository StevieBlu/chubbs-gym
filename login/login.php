<?php
require __DIR__ . '/../config/init.php';
if (isset($_SESSION['username'])) { header('Location: ../dashboard/dashboard.php'); exit(); }
$base = '../';
$title = 'Log in | Chubbs Gym';
$flash = take_flash();
include __DIR__ . '/../config/header.php';
?>
<section class="section">
  <div class="wrap form-wrap">
    <h1 class="page-title">Log in</h1>
    <p class="muted">Welcome back. Enter your details to open your dashboard.</p>
    <?php if ($flash): ?><div class="alert <?= e($flash['type']) ?>" role="alert"><?= e($flash['msg']) ?></div><?php endif; ?>
    <form action="loginprocess.php" method="POST" class="form">
      <?= csrf_field() ?>
      <label for="username">Username</label>
      <input id="username" type="text" name="username" autocomplete="username" required>
      <label for="password">Password</label>
      <input id="password" type="password" name="password" autocomplete="current-password" required>
      <button class="btn" type="submit">Log in</button>
    </form>
    <p class="muted">New here? <a class="link" href="../register/register.php">Create an account</a></p>
  </div>
</section>
<?php include __DIR__ . '/../config/footer.php'; ?>
