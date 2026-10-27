<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Chubbs Gym | Your gym. Your pace.';
include __DIR__ . '/config/header.php';
?>
<section class="hero" id="home">
  <div class="hero-media"><?= pic($base, 'chubbs.jpg', 'Chubbs Peterson, the inspiration behind Chubbs Gym', 'cover') ?></div>
  <div class="hero-shade"></div>
  <div class="wrap hero-copy">
    <p class="kicker">CHUBBS GYM &nbsp; IN HONOR OF CHUBBS PETERSON</p>
    <h1>Your strength.<br>Your pace.<br>Your gym.</h1>
    <p class="lead">A welcoming space for your questions.<br>A thoughtful approach to your next workout.</p>
    <a class="btn" href="register/register.php">Join Chubbs Gym</a>
    <a class="link-light" href="#services">Get to know your training options</a>
  </div>
</section>

<section class="section" id="about">
  <div class="wrap">
    <h2 class="center">Discover a different kind of gym</h2>
    <div class="pillars">
      <div><h3>People first.</h3><p>A workout should make room for you. Your goals, your schedule, and what helps you feel comfortable.</p></div>
      <div><h3>Clarity at every step.</h3><p>Understand your options and the reasons behind them, so the next step feels like a decision you can make.</p></div>
      <div><h3>Thoughtful training.</h3><p>A personal plan begins with a conversation and an assessment, not a one-size-fits-all promise.</p></div>
    </div>
    <div class="callout">
      <div>
        <strong>Looking for training that fits your day?</strong>
        <span>Your member dashboard has its own home.</span>
      </div>
      <a class="btn btn-outline" href="login/login.php">Open member dashboard</a>
    </div>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'personaltrainer.jpg', 'A trainer coaching a member through a lift', 'rounded') ?>
    <div>
      <h2>Personal training</h2>
      <p>Whether it has been six weeks or six years, the first step can be a simple conversation.</p>
      <p>Talk through your goals, ask your questions, and learn what comes next before you commit to a plan.</p>
      <a class="btn" href="register/register.php">Plan your first session</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split flip">
    <div>
      <p class="label">Class schedule</p>
      <h2>Group classes</h2>
      <p>Train with others and find a rhythm that sticks. Start with a conversation about your goals, then learn what each class involves and which one suits your level.</p>
      <a class="link" href="register/register.php">Learn more</a>
    </div>
    <?= pic($base, 'weights.jpg', 'Barbells racked in the main gym floor', 'rounded') ?>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'supplements.jpg', 'Supplements and nutrition products', 'rounded') ?>
    <div>
      <p class="label">Fuel</p>
      <h2>Nutrition counseling</h2>
      <p>Training is only part of the picture. A nutrition coach can help you understand what to eat, when, and why, and build a plan you can actually follow.</p>
      <a class="link" href="register/register.php">Learn more</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap trio">
    <div><h3>Memberships</h3><a class="link" href="register/register.php">Join now</a></div>
    <div><h3>Gallery</h3><a class="link" href="gallery.php">See the gym</a></div>
    <div><h3>Member area</h3><a class="link" href="login/login.php">Log in</a></div>
  </div>
</section>

<section class="section tint" id="welcome">
  <div class="wrap split">
    <div>
      <h2>Welcome to Chubbs Gym!</h2>
      <p class="lead-dark">A dedicated gym experience, with you at the center.</p>
      <p>A workout should make space for your questions and give you a clear understanding of your options. Start with your goals, talk through what matters to you, and learn what comes next.</p>
      <p>Our gym is named in honor of Chubbs Peterson, who taught that the right coach changes everything.</p>
    </div>
    <figure><?= pic($base, 'chubbs.jpg', 'Chubbs Peterson trading card', 'rounded') ?><figcaption>Chubbs Peterson</figcaption></figure>
  </div>
</section>

<section class="section" id="services">
  <div class="wrap">
    <p class="label center">Training, with you at the center</p>
    <h2 class="center">Explore our services</h2>
    <p class="center muted">Your coach will confirm what is available and help you choose what is right for you.</p>
    <div class="cards">
      <article><p class="label">A strong foundation</p><h3>Strength training</h3><p>Everyday training starts with understanding your body.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">Confidence in your body</p><h3>Personal training</h3><p>Work toward what you want to change, at your pace.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">Energy. Community. You.</p><h3>Group classes</h3><p>Find a class that matches your level and your schedule.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">Know your next step</p><h3>Nutrition counseling</h3><p>A conversation about your habits and a plan to improve them.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">Room for your questions</p><h3>Comfort &amp; beginners</h3><p>Share what would help you feel more at ease.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">A simple place to start</p><h3>New member visits</h3><p>Get to know the gym and talk through your goals.</p><a class="link" href="register/register.php">Explore</a></article>
    </div>
  </div>
</section>

<section class="section tint">
  <div class="wrap">
    <p class="label center">One step at a time</p>
    <h2 class="center">A little clarity goes a long way.</h2>
    <ol class="steps">
      <li><span>1</span><h3>Start a conversation</h3><p>Share your goals and ask the questions on your mind.</p></li>
      <li><span>2</span><h3>Understand the options</h3><p>Learn what an assessment means for your next steps.</p></li>
      <li><span>3</span><h3>Make a personal plan</h3><p>Discuss schedule, cost, and any training recommendations.</p></li>
      <li><span>4</span><h3>Keep moving forward</h3><p>Know what to expect at your next session.</p></li>
    </ol>
  </div>
</section>

<section class="section" id="resources">
  <div class="wrap narrow">
    <p class="label center">Before your first visit</p>
    <h2 class="center">Good questions. Clear answers.</h2>
    <p class="center muted">A few things to know about membership, training and this website.</p>
    <details><summary>Is personal training different from group classes?</summary><p>Yes. Personal training is one-on-one coaching built around your goals. Group classes are led sessions with other members.</p></details>
    <details><summary>Where is the gym, and can I join now?</summary><p>You can create a member account today. Gym address, hours and membership pricing will be confirmed by the front desk.</p></details>
    <details><summary>What should I know about payment?</summary><p>Membership tiers and payment options are still being set up. Ask the front desk for current pricing.</p></details>
    <details><summary>Are all services available every day?</summary><p>Not always. Class and coaching schedules vary, so your coach will confirm what is available.</p></details>
  </div>
</section>

<section class="section tint" id="locations">
  <div class="wrap">
    <p class="label center">Two ways to connect</p>
    <h2 class="center">The right place for your next step.</h2>
    <p class="center muted">Train in the gym. Track your progress online.</p>
    <div class="duo">
      <div class="panel">
        <p class="label">In-gym training</p>
        <h3>Visit the gym.</h3>
        <p>A dedicated space for your workout. Address and hours are awaiting confirmation.</p>
        <a class="btn" href="register/register.php">Join now</a>
      </div>
      <div class="panel dark">
        <p class="label">Chubbs Gym members</p>
        <h3>Your dashboard, anywhere.</h3>
        <p>Already a member? Log in to see your member dashboard.</p>
        <a class="btn btn-light" href="login/login.php">Log in</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/config/footer.php'; ?>
