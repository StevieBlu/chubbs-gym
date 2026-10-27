<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Chubbs Gym | Your gym. Your pace.';
include __DIR__ . '/config/header.php';
?>
<section class="hero" id="home">
  <div class="hero-media"><?= pic($base, 'hero-deadlift.jpg', 'Chubbs coaching a deadlift, wooden hand on the lifter’s back, a 45 on each side of the bar', 'cover') ?></div>
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
    <?= pic($base, 'squat-spot.jpg', 'Chubbs spotting a squat with his hook, one upright 45 on each side of the bar', 'rounded') ?>
    <div>
      <h2>Personal training</h2>
      <p>This is the spot. Chubbs is behind the rack, hook on the bar, while you sit into the squat. One 45 a side to start, the number right-side up, and he stays until the hips finish the rep.</p>
      <p>Six weeks off or six years. The first session is a conversation, then a bar you can actually unload.</p>
      <a class="btn" href="register/register.php">Plan your first session</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split flip">
    <div>
      <p class="label">The bench</p>
      <h2>The wooden hand stays in the spot</h2>
      <p>On the bench the hook switches for the wooden hand from the old days. It rests on the bar while you press. Same loading rule: a 45 on each side, the number level, nothing extra painted on the plate.</p>
      <p>Happy once said the game required goofy pants and a fat ass. Shorts are fine. The spotter is not optional.</p>
      <a class="link" href="gallery.php">See the rest of him</a>
    </div>
    <?= pic($base, 'bench-spot.jpg', 'Chubbs spotting a bench press with his wooden hand, 45s loaded upright', 'rounded') ?>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'press-coach.jpg', 'Chubbs cueing a dumbbell press with his wooden hand', 'rounded') ?>
    <div>
      <p class="label">The press</p>
      <h2>Elbows, then the weight</h2>
      <p>He cues a press the way he cued a swing. The wooden hand finds the elbow, the other hand stays out of the way, and the 45s on the rack behind you still read like a real gym.</p>
      <a class="link" href="register/register.php">Learn more</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split flip">
    <div>
      <p class="label">Fuel</p>
      <h2>Nutrition counseling</h2>
      <p>The counter is stocked like a real pro shop: pre-workout, whey protein, creatine, BCAAs. A coach will also talk through what to eat around the work, in plain language, on a weekday.</p>
      <a class="link" href="register/register.php">Learn more</a>
    </div>
    <?= pic($base, 'supplements.jpg', 'Fruit, shakers, and the nutrition counter beside the racks', 'rounded') ?>
  </div>
</section>

<section class="section tint" id="lesson">
  <div class="wrap split">
    <?= pic($base, 'lesson.jpg', 'Chubbs teaching on the green, wooden hand out, it’s all in the hips', 'rounded') ?>
    <div>
      <p class="label">The lesson that stuck</p>
      <h2>It’s all in the hips.</h2>
      <p>He said it on the green with the wooden hand out, and he says it in the rack. The golf lesson and the squat are the same cue.</p>
      <p>Bring the question. He will answer it once, then you lift.</p>
      <a class="btn" href="register/register.php">Book the first session</a>
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
