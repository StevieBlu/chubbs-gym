<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Gallery | Chubbs Gym';
include __DIR__ . '/config/header.php';
$items = [
  ['gym-floor.jpg', 'The main floor at Chubbs Gym, racks in the daylight', 'The floor'],
  ['chubbs-hero.jpg', 'Chubbs on the gym floor with his prosthetic hook', 'Chubbs, still coaching'],
  ['chubbs-coaching.jpg', 'Chubbs cueing a squat with his prosthetic hand', 'A squat cue'],
  ['chubbs-buff-curl.jpg', 'Chubbs curling, hook braced on the rack', 'The curl'],
  ['prosthetic-bar.jpg', 'Chubbs’s prosthetic hook on a loaded barbell', 'The hook'],
  ['chubbs-buff-floor.jpg', 'Chubbs beside a loaded bar in the gym', 'On the floor'],
  ['weights.jpg', 'Barbells, plates, and kettlebells', 'The rack'],
  ['group-class.jpg', 'A small group class with kettlebells', 'Group class'],
  ['supplements.jpg', 'Fruit, shakers, and the nutrition counter', 'The counter'],
  ['chubbs.jpg', 'The original Chubbs Peterson trading card', 'The card'],
];
?>
<section class="section">
  <div class="wrap">
    <h1 class="page-title">Gallery</h1>
    <p class="muted">The floor, the hook, and the card. Click a photo to open it full size.</p>
    <div class="gallery">
      <?php foreach ($items as [$file, $alt, $label]): ?>
        <figure>
          <?php if (file_exists(__DIR__ . '/images/' . $file)): ?>
            <a target="_blank" rel="noopener" href="images/<?= e($file) ?>"><img src="images/<?= e($file) ?>" alt="<?= e($alt) ?>"></a>
          <?php else: ?>
            <div class="ph" role="img" aria-label="<?= e($alt) ?>"><span><?= e($alt) ?></span></div>
          <?php endif; ?>
          <figcaption><?= e($label) ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/config/footer.php'; ?>
