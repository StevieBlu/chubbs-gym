<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Chubbs Gym | Your gym. Your pace.';
include __DIR__ . '/config/header.php';
?>
<section class="hero" id="home">
  <div class="hero-media"><?= pic($base, 'chubbs-deadlift.jpg', 'Chubbs sweating while he coaches a deadlift, wooden hand on the lifter’s back', 'cover') ?></div>
  <div class="hero-shade"></div>
  <div class="wrap hero-copy">
    <p class="kicker">CHUBBS GYM &nbsp; IN HONOR OF CHUBBS PETERSON</p>
    <h1>Your strength.<br>Your pace.<br>Your gym.</h1>
    <p class="lead">A real floor, real racks, and a coach who talks you through the next set. Walk in rusty. Leave with a plan.</p>
    <a class="btn" href="register/register.php">Claim a free spot</a>
    <a class="link-light" href="#grounds">See the 9th Green</a>
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
        <strong>Free for the first 100 guests.</strong>
        <span>The full experience, on the house. When those spots are gone, they’re gone. Hurry.</span>
      </div>
      <a class="btn btn-outline" href="register/register.php">Take a spot</a>
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
      <h2>The hook stays on the bar</h2>
      <p>He spots from behind the bench, steel hook on the bar, sweat on his face, and he does not wander off mid-rep. Shorts are fine. The spotter is not optional.</p>
      <a class="link" href="gallery.php">See the rest of the floor</a>
    </div>
    <?= pic($base, 'chubbs-bench.jpg', 'Chubbs spotting a bench press with his hook on the bar, sweating', 'rounded') ?>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'chubbs-row.jpg', 'Chubbs cueing a one-arm row with his hook, sweat on his face', 'rounded') ?>
    <div>
      <p class="label">The row</p>
      <h2>Hinge, then pull</h2>
      <p>One hand on the bench, the dumbbell drives back, and the hook stays up by the shoulder so you can see the cue. He is sweating because he is in the set with you.</p>
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
    <?= pic($base, 'facility-counter.jpg', 'Pre-workout, whey protein, creatine, and BCAAs on the nutrition counter', 'rounded') ?>
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
  <div class="wrap">
    <p class="label center">Same coach, different station</p>
    <h2 class="center">He sweats through the session with you.</h2>
    <p class="center muted">A lunge, a kettlebell, a pull-up. Wooden hand one day, hook the next. He is in the set, not in a portrait.</p>
    <div class="pose-row">
      <figure>
        <?= pic($base, 'chubbs-lunge.jpg', 'Chubbs cueing a lunge with his hook at the front knee', 'rounded') ?>
        <figcaption>The lunge. Hook on the front knee, both of them working.</figcaption>
      </figure>
      <figure>
        <?= pic($base, 'chubbs-kettle.jpg', 'Chubbs hinging to demonstrate a kettlebell lift, hook hand out', 'rounded') ?>
        <figcaption>The kettlebell. He hinges first, then you copy it.</figcaption>
      </figure>
      <figure>
        <?= pic($base, 'chubbs-pullup.jpg', 'Chubbs coaching a dead hang, wooden hand open', 'rounded') ?>
        <figcaption>The bar. A dead hang, and the wooden hand showing where the hip goes.</figcaption>
      </figure>
    </div>
  </div>
</section>

<section class="section tint" id="grounds">
  <div class="wrap">
    <p class="label center">Waterbury, Connecticut</p>
    <h2 class="center">The 9th Green at 9:00 PM.</h2>
    <p class="center muted">The gym sits on the range. Racks inside, a turf lane beside them, the green out the window. Chubbs is here Monday through Friday, 7am to 3pm. He is not here around the clock. On weekends, hot dog and hamburger carts travel the green.</p>
    <div class="mosaic">
      <figure class="wide">
        <?= pic($base, 'facility-exterior.jpg', 'The 9th Green clubhouse at dusk, range lights on, autumn trees', 'rounded') ?>
        <figcaption>The clubhouse, when the range lights come on.</figcaption>
      </figure>
      <figure>
        <?= pic($base, 'facility-cart.jpg', 'A hot dog and hamburger cart on the grass beside the driving range', 'rounded') ?>
        <figcaption>Weekend carts. Hot dogs and hamburgers, moving around the green.</figcaption>
      </figure>
      <figure class="wide">
        <?= pic($base, 'facility-floor.jpg', 'The weight room with ALL IN THE HIPS painted on the floor and the range outside', 'rounded') ?>
        <figcaption>The floor. The range is right outside the glass.</figcaption>
      </figure>
      <figure>
        <?= pic($base, 'facility-racks.jpg', 'Three green squat racks, each bar loaded with one upright 45 a side, TAP IT IN on the wall', 'rounded') ?>
        <figcaption>Racks loaded the way a real gym loads them.</figcaption>
      </figure>
      <figure>
        <?= pic($base, 'facility-turf.jpg', 'Indoor turf lane with a putter and a hockey stick, TAP IT IN on the grass', 'rounded') ?>
        <figcaption>The turf lane. Putter, hockey stick, and a short walk to the racks.</figcaption>
      </figure>
      <figure class="wide">
        <?= pic($base, 'facility-range-night.jpg', 'The driving range at night under floodlights, yardage signs down the fairway', 'rounded') ?>
        <figcaption>Nine o’clock. The bays are lit and the tree line is dark.</figcaption>
      </figure>
    </div>
    <p class="center more"><a class="link" href="gallery.php">More of the building, the lockers, and the green</a></p>
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
      <li><span>3</span><h3>Make a personal plan</h3><p>It’s free. Talk through the schedule and the first session before the hundred spots fill.</p></li>
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
    <details><summary>Where is the gym, and can I join now?</summary><p>The 9th Green at 9:00 PM Waterbury, in Waterbury, Connecticut. Admission is free so the public can taste the full experience. Space is limited to the first 100 guests, so hurry.</p></details>
    <details><summary>Are all services available every day?</summary><p>No. Chubbs can’t be there around the clock. He is on the floor Monday through Friday, 7am to 3pm. On weekends the golf range runs rotating food carts — hot dogs and hamburgers — that travel around the green.</p></details>
  </div>
</section>

<section class="section tint" id="locations">
  <div class="wrap">
    <p class="label center">Two ways to connect</p>
    <h2 class="center">The right place for your next step.</h2>
    <p class="center muted">Train in the gym. Track your progress online.</p>
    <div class="duo">
      <div class="panel">
        <p class="label">Waterbury, Connecticut</p>
        <h3>The 9th Green at 9:00 PM Waterbury.</h3>
        <p>Chubbs is here Monday through Friday, 7am to 3pm. Weekends, hot dog and hamburger carts roll around the green. The first 100 guests get the full experience free. Hurry.</p>
        <a class="btn" href="register/register.php">Claim a free spot</a>
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
