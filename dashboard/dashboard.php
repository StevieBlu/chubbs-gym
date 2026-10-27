<?php
require __DIR__ . '/../config/init.php';
if (!isset($_SESSION['username'])) { header('Location: ../login/login.php'); exit(); }
$base = '../';
$title = 'Dashboard | Chubbs Gym';
$isOwner = $_SESSION['username'] === 'chubbs';
$leads = [];
$stats = ['count' => 0, 'left' => 100, 'ok' => false];
if ($isOwner) {
    $stats = lead_stats();
    $conn = db_soft();
    if ($conn) {
        $res = $conn->query('SELECT id, name, email, phone, created_at FROM leads ORDER BY id DESC');
        if ($res) while ($row = $res->fetch_assoc()) $leads[] = $row;
    }
}
include __DIR__ . '/../config/header.php';

function lead_when($mysqlTime) {
    $dt = new DateTime($mysqlTime, new DateTimeZone('UTC'));
    $dt->setTimezone(new DateTimeZone('America/New_York'));
    return $dt->format('M j, g:i a') . ' ET';
}
?>
<section class="section">
  <div class="wrap">
    <h1 class="page-title">Welcome, <?= e($_SESSION['username']) ?>.</h1>
    <p class="muted">Chubbs is on the floor Monday through Friday, 7am to 3pm. Weekends, the hot dog and hamburger carts are out on the green.</p>
    <?php if ($isOwner): ?>
      <h2>Guest cards</h2>
      <p><?= e((string)$stats['count']) ?> people have sent a name, email, and phone. <?= e((string)$stats['left']) ?> of the 100 cards are still open. The first 100 are tickets. Everyone after that is a waitlist lead.</p>
      <?php if (!$leads): ?>
        <p class="muted">No leads yet. The claim form on the home page is where they land.</p>
      <?php else: ?>
        <div class="table-wrap">
          <table class="leads">
            <thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>When</th></tr></thead>
            <tbody>
              <?php foreach ($leads as $i => $lead): ?>
                <tr>
                  <td><?= e($lead['name']) ?> <span class="gmeta"><?= (int)$lead['id'] <= 100 ? 'Card ' . (int)$lead['id'] : 'Waitlist' ?></span></td>
                  <td><a class="link" href="mailto:<?= e($lead['email']) ?>"><?= e($lead['email']) ?></a></td>
                  <td><?= e($lead['phone']) ?></td>
                  <td><?= e(lead_when($lead['created_at'])) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    <?php else: ?>
      <div class="cards">
        <article><p class="label">Your card</p><h3>Show it at the gate</h3><p>If you were inside the first 100, the guest card is your ticket. The desk has the list.</p></article>
        <article><p class="label">The floor</p><h3>Weekdays, 7am to 3pm</h3><p>Chubbs coaches those hours. Weekends are the range and the carts.</p></article>
        <article><p class="label">The long game</p><h3>The gold jacket</h3><p>Loyal members earn the jacket the pros used to play for. It stays in the case until your name is up.</p></article>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php include __DIR__ . '/../config/footer.php'; ?>
