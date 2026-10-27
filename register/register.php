<?php
require __DIR__ . '/../config/init.php';
if (isset($_SESSION['username'])) { header('Location: ../dashboard/dashboard.php'); exit(); }
$base = '../';
$title = 'Join | Chubbs Gym';
$flash = take_flash();
$old = $_SESSION['old'] ?? []; unset($_SESSION['old']);
include __DIR__ . '/../config/header.php';
?>
<section class="section">
  <div class="wrap form-wrap">
    <h1 class="page-title">Join Chubbs Gym</h1>
    <p class="muted">Create your member account in under a minute.</p>
    <?php if ($flash): ?><div class="alert <?= e($flash['type']) ?>" role="alert"><?= e($flash['msg']) ?></div><?php endif; ?>
    <form action="registerprocess.php" method="POST" class="form">
      <?= csrf_field() ?>
      <label for="username">Username</label>
      <input id="username" type="text" name="username" value="<?= e($old['username'] ?? '') ?>" minlength="3" maxlength="50" autocomplete="username" required>
      <label for="email">Email</label>
      <input id="email" type="email" name="email" value="<?= e($old['email'] ?? '') ?>" autocomplete="email" required>
      <label for="password">Password <span class="hint">(at least 8 characters)</span></label>
      <input id="password" type="password" name="password" minlength="8" autocomplete="new-password" required>
      <button class="btn" type="submit">Create account</button>
    </form>
    <p class="muted">Already a member? <a class="link" href="../login/login.php">Log in</a></p>
  </div>
</section>
<?php include __DIR__ . '/../config/footer.php'; ?>
