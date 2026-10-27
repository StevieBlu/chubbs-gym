<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Chubbs Gym | Your gym. Your pace.';
include __DIR__ . '/config/header.php';
?>
<section class="hero" id="home">
  <div class="hero-media"><?= pic($base, 'chubbs-hero.jpg', 'Chubbs Peterson, buff, with his prosthetic hook, on the gym floor', 'cover') ?></div>
  <div class="hero-shade"></div>
  <div class="wrap hero-copy">
    <p class="kicker">CHUBBS GYM &nbsp; IN HONOR OF CHUBBS PETERSON</p>
    <h1>Your strength.<br>Your pace.<br>Your gym.</h1>
    <p class="lead">A real floor, real racks, and a coach who talks you through the next set. Walk in rusty. Leave with a plan.</p>
    <a class="btn" href="register/register.php">Join Chubbs Gym</a>
    <a class="link-light" href="#banter">Hear Chubbs and Happy</a>
  </div>
</section>

<section class="section" id="about">
  <div class="wrap">
    <h2 class="center">A gym that makes room, then makes you work</h2>
    <div class="pillars">
      <div><h3>People first.</h3><p>Walk in unsure. Someone learns your name before they load the bar. The iron is here. So is a coach.</p></div>
      <div><h3>The work is the work.</h3><p>Squats, presses, classes, and the reason for each one. You should know what the next set is for.</p></div>
      <div><h3>A coach in the corner.</h3><p>Chubbs lost a hand and kept the lesson. Form first. Then the weight. Then you come back.</p></div>
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

<section class="floorband">
  <?= pic($base, 'gym-floor.jpg', 'Sunlight, squat racks, and the main floor at Chubbs Gym', 'band') ?>
</section>

<section class="section" id="banter">
  <div class="wrap">
    <p class="label center">Still yelling across the floor</p>
    <h2 class="center">Chubbs and Happy, between sets</h2>
    <p class="center muted">The lessons left the driving range. The arguments came with them.</p>
    <div class="banter">
      <article>
        <p class="who chubbs">Chubbs</p>
        <p class="line">“Just tap it in. Give it a little tappy. Tap, tap, taparoo.”</p>
        <p class="who happy">Happy</p>
        <p class="line">“Grandma! Grandma!”</p>
        <p class="aside">Last plate, last putt. Same advice. Find the happy place, then tap it in.</p>
      </article>
      <article>
        <p class="who chubbs">Chubbs</p>
        <p class="line">“Think of a place that’s really perfect. Your own happy place. Go there, and all your anger will just disappear.”</p>
        <p class="who happy">Happy</p>
        <p class="line">“Better.”</p>
        <p class="who chubbs">Chubbs</p>
        <p class="line">“Now putt.”</p>
        <p class="aside">On this floor he says “now lift.” You still can’t squat angry.</p>
      </article>
      <article>
        <p class="who chubbs">Chubbs</p>
        <p class="line">“It’s all in the hips. It’s all in the hips.”</p>
        <p class="who happy">Happy</p>
        <p class="line">“Get off of me!”</p>
        <p class="who chubbs">Chubbs</p>
        <p class="line">“Just easin’ the tension, baby.”</p>
        <p class="aside">Hips drive the squat. The hug is optional. The cue is not.</p>
      </article>
      <article>
        <p class="who chubbs">Chubbs</p>
        <p class="line">“Damned alligator bit my hand off. Cut me down in my prime.”</p>
        <p class="who happy">Happy</p>
        <p class="line">“Oh my God. You’re pretty sick, Chubbs.”</p>
        <p class="aside">He tells it worse if you ask. Then he spots the next set with the hook.</p>
      </article>
    </div>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'chubbs-coaching.jpg', 'Chubbs cueing a squat with his prosthetic hand', 'rounded') ?>
    <div>
      <h2>Personal training</h2>
      <p>Six weeks off or six years. The first session is a conversation, then a bar, then a set you can repeat.</p>
      <p>Your coach writes the plan down. You ask the awkward questions. Nobody hands you a one-size program and walks away.</p>
      <a class="btn" href="register/register.php">Plan your first session</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split flip">
    <div>
      <p class="label">The floor</p>
      <h2>Racks, plates, and daylight</h2>
      <p>This is a gym. Barbells on the wall, kettlebells in a row, benches that have seen real work. It is also a room you can walk into without a performance.</p>
      <p>Happy once said the game required goofy pants and a fat ass. Chubbs bet the accountant next door still could not drive it four hundred yards. Shorts are fine. The effort is the membership.</p>
      <a class="link" href="gallery.php">See the floor</a>
    </div>
    <?= pic($base, 'weights.jpg', 'Barbells, plates, and kettlebells in the gym', 'rounded') ?>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'group-class.jpg', 'A small group class training with kettlebells', 'rounded') ?>
    <div>
      <p class="label">Class schedule</p>
      <h2>Group classes</h2>
      <p>Train next to other people and find a rhythm that sticks. Kettlebells, a count, and a coach who will tell you which class fits your level.</p>
      <a class="link" href="register/register.php">Learn more</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split flip">
    <div>
      <p class="label">Fuel</p>
      <h2>Nutrition counseling</h2>
      <p>The work is only part of it. A coach will talk through what to eat around training, in plain language, and build a plan you can follow on a weekday.</p>
      <a class="link" href="register/register.php">Learn more</a>
    </div>
    <?= pic($base, 'supplements.jpg', 'Fruit, shakers, and the nutrition counter beside the racks', 'rounded') ?>
  </div>
</section>

<section class="section tint" id="hook">
  <div class="wrap">
    <p class="label center">The hand came off. The coaching did not.</p>
    <h2 class="center">Buff, and the hook stays on the bar.</h2>
    <p class="center muted">Chubbs trains the floor he used to only talk about. The prosthetic loads plates, braces a rack, and still points at your hips.</p>
    <div class="split shots">
      <figure><?= pic($base, 'chubbs-buff-curl.jpg', 'Chubbs curling a dumbbell, prosthetic hook braced on the rack', 'rounded') ?><figcaption>One dumbbell. One hook. No excuses.</figcaption></figure>
      <figure><?= pic($base, 'prosthetic-bar.jpg', 'Chubbs’s metal hook resting on a loaded barbell', 'rounded') ?><figcaption>The fake hand is just another piece of gym gear.</figcaption></figure>
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
      <h2>Welcome to Chubbs Gym.</h2>
      <p class="lead-dark">Named for the coach. Built like a gym. Run like he is still watching your hips.</p>
      <p>Bring your questions. You will get a straight answer, a first workout, and a reason to come back on Thursday.</p>
      <p>The card is how a lot of members meet him. The floor is where you stay.</p>
    </div>
    <figure><?= pic($base, 'chubbs.jpg', 'Chubbs Peterson trading card', 'rounded') ?><figcaption>Chubbs Peterson. The card that started it.</figcaption></figure>
  </div>
</section>

<section class="section" id="services">
  <div class="wrap">
    <p class="label center">Training, with you at the center</p>
    <h2 class="center">Explore the floor</h2>
    <p class="center muted">Your coach will tell you what is on the schedule and which part of it is yours.</p>
    <div class="cards">
      <article><p class="label">The bar and the rack</p><h3>Strength training</h3><p>Everyday work starts with a lift you understand and a weight you can own.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">One coach</p><h3>Personal training</h3><p>Your pace, your sets, written down. Change what you came to change.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">Show up with people</p><h3>Group classes</h3><p>A class that matches your level, your week, and your knees.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">Around the work</p><h3>Nutrition counseling</h3><p>What to eat, when, and why, in language you can use at dinner.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">First day welcome</p><h3>Comfort &amp; beginners</h3><p>Tell us what would make the floor feel less like a test.</p><a class="link" href="register/register.php">Explore</a></article>
      <article><p class="label">See it first</p><h3>New member visits</h3><p>Walk the racks, meet a coach, and talk through the goal before you join.</p><a class="link" href="register/register.php">Explore</a></article>
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
