<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Gallery | Chubbs Gym';
include __DIR__ . '/config/header.php';
$items = [
  ['facility-lobby.jpg', 'Front desk at the 9th Green, a sign for the first 100 free guests, and the range through the glass', 'The front desk'],
  ['facility-lockers.jpg', 'Green lockers, a wooden bench, golf shoes and training shoes', 'The lockers'],
  ['facility-class.jpg', 'Kettlebells lined up on turf under a wall that reads NOW LIFT', 'The class corner'],
  ['facility-machine.jpg', 'A green and gold sled marked 400 YARDS on the turf', '400 yards'],
  ['facility-green.jpg', 'The practice green and gravel path beside the brick building', 'The practice green'],
  ['chubbs-range.jpg', 'Chubbs on the range, sweating, wooden hand out, a student swinging behind him', 'On the range'],
  ['chubbs-farmer.jpg', 'Chubbs walking with a member carrying plates, wooden hand raised', 'The carry'],
  ['chubbs-stretch.jpg', 'Chubbs kneeling beside a hip stretch, wooden hand on the lifter’s back', 'The stretch'],
  ['range.jpg', 'Chubbs on the driving range with a club and his wooden hand', 'The old range'],
  ['coach-portrait.jpg', 'Chubbs in the gym, wooden hand in, saying it’s all in the hips', 'All in the hips, son'],
  ['happy-place.jpg', 'Chubbs in white on the grass', 'Out on the grass'],
];
?>
<section class="section">
  <div class="wrap">
    <h1 class="page-title">The grounds</h1>
    <p class="muted">The rest of the 9th Green, and a few more of Chubbs at work. Every photo is on the site once. Click to open full size.</p>
    <div class="gallery">
      <?php foreach ($items as [$file, $alt, $label]): ?>
        <figure>
          <?php if (file_exists(__DIR__ . '/images/' . $file)): ?>
            <a target="_blank" rel="noopener" href="images/<?= e($file) ?>?v=<?= filemtime(__DIR__ . '/images/' . $file) ?>"><img src="images/<?= e($file) ?>?v=<?= filemtime(__DIR__ . '/images/' . $file) ?>" alt="<?= e($alt) ?>"></a>
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
