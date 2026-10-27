<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Gallery | Chubbs Gym';
include __DIR__ . '/config/header.php';
$items = [
  ['supplements.jpg', 'Supplements assortment', 'Supplements'],
  ['chubbs.jpg', 'Chubbs Peterson', 'Chubbs'],
  ['weights.jpg', 'Barbell in the gym', 'Weights'],
  ['personaltrainer.jpg', 'Personal training session', 'Personal training'],
];
?>
<section class="section">
  <div class="wrap">
    <h1 class="page-title">Gallery</h1>
    <p class="muted">Click an image to open it full size.</p>
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
