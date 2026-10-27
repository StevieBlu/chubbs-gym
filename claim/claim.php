<?php
require __DIR__ . '/../config/init.php';
$base = '../';
$title = 'Claim a card | Chubbs Gym';
$flash = take_flash();
$old = $_SESSION['old'] ?? [];
unset($_SESSION['old']);
$cardNo = $_SESSION['card_no'] ?? null;
unset($_SESSION['card_no']);
$stats = lead_stats();
include __DIR__ . '/../config/header.php';
?>
<section class="section">
  <div class="wrap claim-layout">
    <div>
      <p class="label">One hundred cards. Then the gate is full.</p>
      <h1 class="page-title">Claim a free spot.</h1>
      <p>The visit is free. The card is how you get in. Put your name, email, and phone here and, if you are inside the hundred, this card is your ticket. Show it at the gate. No payment, no account required.</p>
      <?php if ($flash): ?><div class="alert <?= e($flash['type']) ?>" role="alert"><?= e($flash['msg']) ?></div><?php endif; ?>
      <?php if ($cardNo): ?>
        <p class="lead-dark">Card <?= e((string)$cardNo) ?> of 100 is yours. Hold it up at the gate.</p>
      <?php endif; ?>
      <?php include __DIR__ . '/form.php'; ?>
      <p class="muted">Want a login for the member dashboard too? <a class="link" href="../register/register.php">Create an account</a>.</p>
    </div>
    <figure class="card-col">
      <?= pic($base, 'guest-card.jpg', 'The 9th Green guest card: Chubbs and the alligator wave from the clouds while Happy looks up and waves back. Show at the gate. 1 of 100.', 'pass') ?>
      <figcaption>Show this at the gate. Only 100 people get one.</figcaption>
    </figure>
  </div>
</section>
<?php include __DIR__ . '/../config/footer.php'; ?>
