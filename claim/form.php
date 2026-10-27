<?php
// Expects $base and, optionally, $old and $stats.
$old = $old ?? [];
$stats = $stats ?? lead_stats();
$left = (int)$stats['left'];
?>
<form action="<?= e($base) ?>claim/claimprocess.php" method="POST" class="form lead-form">
  <?= csrf_field() ?>
  <label for="name">Name</label>
  <input id="name" name="name" required maxlength="120" autocomplete="name" value="<?= e($old['name'] ?? '') ?>">
  <label for="email">Email</label>
  <input id="email" name="email" type="email" required maxlength="255" autocomplete="email" value="<?= e($old['email'] ?? '') ?>">
  <label for="phone">Phone</label>
  <input id="phone" name="phone" type="tel" required maxlength="40" autocomplete="tel" inputmode="tel" value="<?= e($old['phone'] ?? '') ?>">
  <input class="hp" tabindex="-1" autocomplete="off" name="company" aria-hidden="true">
  <button class="btn" type="submit"><?= $left > 0 ? 'Send me the card' : 'Join the waitlist' ?></button>
  <p class="fine">Name, email, and phone. We use them to hold your card and tell you when a weekday opens. <?= $left > 0 ? e((string)$left) . ' of 100 cards are still open.' : 'The 100 cards are claimed. We will keep your info if one frees up.' ?></p>
</form>
