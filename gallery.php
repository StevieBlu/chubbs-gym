<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Gallery | Chubbs Gym';
include __DIR__ . '/config/header.php';
$items = [
  ['range.jpg', 'Chubbs on the driving range, club in one hand and the wooden hand at his side', 'The range'],
  ['coach-portrait.jpg', 'Chubbs in the gym, wooden hand in, saying it’s all in the hips', 'All in the hips, son'],
  ['happy-place.jpg', 'Chubbs in white, the happy place', 'The happy place'],
];
?>
<section class="section">
  <div class="wrap">
    <h1 class="page-title">Gallery</h1>
    <p class="muted">The range, the coach, and the happy place. The floor photos live on the home page, each one once. Click to open full size.</p>
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
