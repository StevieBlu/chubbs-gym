<?php
require __DIR__ . '/../config/init.php';
if (!isset($_SESSION['username'])) { header('Location: ../login/login.php'); exit(); }
$base = '../';
$title = 'Dashboard | Chubbs Gym';
include __DIR__ . '/../config/header.php';
?>
<section class="section">
  <div class="wrap">
    <h1 class="page-title">Welcome, <?= e($_SESSION['username']) ?>.</h1>
    <p class="muted">This is your member dashboard. Only logged-in members can see it.</p>
    <div class="cards">
      <article><p class="label">Next step</p><h3>Book a session</h3><p>Session booking is coming soon. Ask the front desk in the meantime.</p></article>
      <article><p class="label">Your plan</p><h3>Workout tracking</h3><p>Track your workouts here once this feature launches.</p></article>
      <article><p class="label">Stay in the loop</p><h3>Newsletter</h3><p>Subscribe for gym updates and class changes.</p></article>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../config/footer.php'; ?>
