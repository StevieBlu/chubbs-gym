<?php $base = $base ?? ''; ?>
</main>
<footer class="site-footer">
  <div class="wrap foot">
    <div>
      <a class="brand" href="<?= e($base) ?>index.php">CHUBBS<b>GYM</b></a>
      <p>The 9th Green at 9:00 PM Waterbury<br>Waterbury, Connecticut</p>
      <p>Monday–Friday, 7am–3pm. Weekend hot dog and hamburger carts on the green.</p>
    </div>
    <div>
      <strong>Explore</strong>
      <a href="<?= e($base) ?>index.php#about">Our approach</a>
      <a href="<?= e($base) ?>index.php#services">Explore services</a>
      <a href="<?= e($base) ?>index.php#resources">Member resources</a>
      <a href="<?= e($base) ?>gallery.php">Gallery</a>
    </div>
    <div>
      <strong>Members</strong>
      <a href="<?= e($base) ?>login/login.php">Log in</a>
      <a href="<?= e($base) ?>register/register.php">Join now</a>
    </div>
  </div>
  <div class="wrap legal">&copy; <?= date('Y') ?> Chubbs Gym. All rights reserved.</div>
</footer>
<script>
  var b=document.querySelector('.menu-btn'),n=document.getElementById('nav');
  if(b){b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o);});}
</script>
</body>
</html>
