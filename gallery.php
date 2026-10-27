<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Gallery | Chubbs Gym';
include __DIR__ . '/config/header.php';
$items = [
  ['gym-floor.jpg', 'Gym floor stenciled ALL IN THE HIPS, wall reading HAPPY PLACE', 'All in the hips'],
  ['chubbs-buff-floor.jpg', 'Chubbs on the turf lane over a JUST TAP IT IN floor stencil', 'Just tap it in'],
  ['chubbs-hero.jpg', 'Chubbs with his hook beside a wall that says TAP IT IN', 'Tap it in'],
  ['chubbs-coaching.jpg', 'Chubbs cueing a squat under a wall that says ALL IN THE HIPS', 'The hips'],
  ['weights.jpg', 'Custom green and gold plates stamped TAP IT IN, CHUBBS, and 400', 'The plates'],
  ['machine.jpg', 'Custom green machine labeled 400 YARDS, floor stenciled EASE IT', '400 yards'],
  ['group-class.jpg', 'Kettlebell class under a wall that says HAPPY PLACE', 'Happy place'],
  ['chubbs-buff-curl.jpg', 'Chubbs curling beside a plate that says TAP IT IN', 'The curl'],
  ['prosthetic-bar.jpg', 'Chubbs lifting a bar stamped CHUBBS, pad reading NOW LIFT', 'Now lift'],
  ['supplements.jpg', 'Pre-workout, whey protein, creatine, and BCAAs on the gym counter', 'The counter'],
  ['chubbs.jpg', 'The original Chubbs Peterson trading card', 'The card'],
];
?>
<section class="section">
  <div class="wrap">
    <h1 class="page-title">Gallery</h1>
    <p class="muted">The lines are on the floor, the walls, and the iron. Click a photo to open it full size.</p>
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
