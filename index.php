<?php
require __DIR__ . '/config/init.php';
$base = '';
$title = 'Chubbs Gym | Your gym. Your pace.';
include __DIR__ . '/config/header.php';
?>
<section class="hero" id="home">
  <div class="hero-media"><?= pic($base, 'coach-deadlift.jpg', 'Chubbs coaching a deadlift from the floor, hand on the lifter’s back, hook at his side', 'cover') ?></div>
  <div class="hero-shade"></div>
  <div class="wrap hero-copy">
    <p class="kicker">CHUBBS GYM &nbsp; IN HONOR OF CHUBBS PETERSON</p>
    <h1>Your strength.<br>Your pace.<br>Your gym.</h1>
    <p class="lead">A real floor, real racks, and a coach who talks you through the next set. Walk in rusty. Leave with a plan.</p>
    <a class="btn" href="#claim">Claim a free spot</a>
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
      <a class="btn btn-outline" href="#claim">Take a spot</a>
    </div>
  </div>
</section>

<section class="section" id="claim">
  <div class="wrap form-wrap">
    <p class="label">The list is the card</p>
    <h2>Claim a free spot.</h2>
    <p>Leave your name, email, and phone. If you are inside the first 100, the guest card is your ticket. Show it at the gate and you are in. There is nothing to pay.</p>
    <?php $old = []; include __DIR__ . '/claim/form.php'; ?>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'squat-spot.jpg', 'Chubbs spotting a squat with his hook, one upright 45 on each side of the bar', 'rounded') ?>
    <div>
      <h2>Personal training</h2>
      <p>This is the spot. Chubbs is behind the rack, hook on the bar, while you sit into the squat. One 45 a side to start, the number right-side up, and he stays until the hips finish the rep.</p>
      <p>Six weeks off or six years. The first session is a conversation, then a bar you can actually unload.</p>
      <a class="btn" href="claim/claim.php">Plan your first session</a>
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
    <?= pic($base, 'coach-bench.jpg', 'Chubbs spotting a bench press, hook near the bar, eyes on the lift', 'rounded') ?>
  </div>
</section>

<section class="section tint">
  <div class="wrap split">
    <?= pic($base, 'coach-row.jpg', 'Chubbs cueing a one-arm row, hook at the shoulder blade', 'rounded') ?>
    <div>
      <p class="label">The row</p>
      <h2>Hinge, then pull</h2>
      <p>One hand on the bench, the dumbbell drives back, and the hook stays up by the shoulder so you can see the cue. He is sweating because he is in the set with you.</p>
      <a class="link" href="claim/claim.php">Learn more</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split flip">
    <div>
      <p class="label">Fuel</p>
      <h2>Nutrition counseling</h2>
      <p>The counter is stocked like a real pro shop: pre-workout, whey protein, creatine, BCAAs. A coach will also talk through what to eat around the work, in plain language, on a weekday.</p>
      <a class="link" href="claim/claim.php">Learn more</a>
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
      <a class="btn" href="claim/claim.php">Book the first session</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <p class="label center">Same coach, different station</p>
    <h2 class="center">He sweats through the session with you.</h2>
    <p class="center muted">A lunge, a pull-up, a carry. He stands where a coach stands and watches the set. He does not pose for it.</p>
    <div class="pose-row">
      <figure>
        <?= pic($base, 'coach-lunge.jpg', 'Chubbs kneeling beside a lunge and pointing out the position', 'rounded') ?>
        <figcaption>The lunge. He watches the front knee and says what to fix.</figcaption>
      </figure>
      <figure>
        <?= pic($base, 'coach-pullup.jpg', 'Chubbs coaching a pull-up, the lifter’s feet off the floor', 'rounded') ?>
        <figcaption>The bar. Feet off the floor. He talks you through the ribs.</figcaption>
      </figure>
      <figure>
        <?= pic($base, 'coach-carry.jpg', 'Chubbs walking beside a farmer’s carry, watching the shoulders', 'rounded') ?>
        <figcaption>The carry. He stays half a step behind and watches your shoulders.</figcaption>
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
    <div><h3>Guest card</h3><a class="link" href="claim/claim.php">Claim a spot</a></div>
    <div><h3>Gallery</h3><a class="link" href="gallery.php">See the gym</a></div>
    <div><h3>Member area</h3><a class="link" href="login/login.php">Log in</a></div>
  </div>
</section>

<section class="section tint" id="card">
  <div class="wrap split">
    <div>
      <p class="label">Your ticket</p>
      <h2>The card gets you through the gate.</h2>
      <p class="lead-dark">Show it. That is the whole check-in.</p>
      <p>Chubbs, Happy, and the alligator are on it, the way they wave when Happy looks up. It is a guest card, not a souvenir pile. One hundred of them. If yours is in that hundred, the gate opens. If it is not, you are on the list for the next one.</p>
      <a class="btn" href="claim/claim.php">Get the card</a>
    </div>
    <figure class="card-col"><?= pic($base, 'guest-card.jpg', 'Guest card for the 9th Green, show at the gate, 1 of 100', 'pass') ?><figcaption>Hold it up. The person at the gate knows the hundred.</figcaption></figure>
  </div>
</section>

<section class="section" id="day">
  <div class="wrap">
    <p class="label center">What the hours actually feel like</p>
    <h2 class="center">A day on the floor, and the week around it.</h2>
    <div class="split schedule">
      <div>
        <h3>A weekday with Chubbs</h3>
        <p class="muted">Monday through Friday. The coached day is 7am to 3pm. He leaves at 3.</p>
        <ol class="day">
          <li><time>7:00</time><p>The gate opens. You show the card. They check the hundred and wave you through.</p></li>
          <li><time>7:15</time><p>Squat block. He stands behind the rack, hook on the bar, and he stays until the hips finish.</p></li>
          <li><time>8:30</time><p>Bench and rows. On the bench the hook sits by the sleeve. On the row it stays at the shoulder blade.</p></li>
          <li><time>10:00</time><p>The range. Address first, then the hips. Same cue he used on the squat.</p></li>
          <li><time>12:00</time><p>The counter. Whey, creatine, a piece of fruit, and a plain answer about lunch.</p></li>
          <li><time>1:00</time><p>Carries, kettlebells, pull-ups. He walks with you or stands where he can see the position. He does not do the set for you.</p></li>
          <li><time>3:00</time><p>He is done. The coached day ends. Questions wait until the next morning.</p></li>
        </ol>
      </div>
      <div>
        <h3>A weekend on the green</h3>
        <p class="muted">Saturday and Sunday. No coach on the floor. The carts take the shift.</p>
        <ol class="day">
          <li><time>9:00</time><p>Same gate, same card. The range and the practice green are open.</p></li>
          <li><time>10:00</time><p>Hit balls or walk the turf lane. The racks are there if you want them. Chubbs is not.</p></li>
          <li><time>12:00</time><p>The cart starts its loop. Hot dogs and hamburgers, off the grill, moving around the green.</p></li>
          <li><time>2:00</time><p>It comes back around. That is lunch. Then more balls, or you head home.</p></li>
        </ol>
      </div>
    </div>
    <h3 class="center week-title">The week</h3>
    <div class="week">
      <article><p class="label">Mon</p><h3>Squat</h3><p>Chubbs in the rack, 7am–3pm.</p></article>
      <article><p class="label">Tue</p><h3>Bench</h3><p>Presses and rows with a spot.</p></article>
      <article><p class="label">Wed</p><h3>Range</h3><p>Address, then the hips.</p></article>
      <article><p class="label">Thu</p><h3>Carry</h3><p>Pull-ups, hinges, farmer’s walks.</p></article>
      <article><p class="label">Fri</p><h3>Mixed</h3><p>Full floor. Jacket names go up.</p></article>
      <article><p class="label">Sat</p><h3>Carts</h3><p>Hot dogs and hamburgers. No coach.</p></article>
      <article><p class="label">Sun</p><h3>Green</h3><p>Practice green, second cart loop.</p></article>
    </div>
  </div>
</section>

<section class="section tint" id="jacket">
  <div class="wrap split">
    <?= pic($base, 'gold-jacket.jpg', 'A gold golf blazer in a glass case, plaque reading GOLD JACKET', 'rounded') ?>
    <div>
      <p class="label">For the ones who stay</p>
      <h2>The gold jacket.</h2>
      <p>The pros used to play for this jacket. Here, the most loyal members earn it. It hangs in the case by the desk until a Friday list has your name on it.</p>
      <p>The guest card gets you in the gate. The jacket is what the regulars are actually chasing. Show up on the coached days. That is the whole contest.</p>
    </div>
  </div>
</section>

<section class="section" id="reviews">
  <div class="wrap">
    <p class="label center">From people who have been through the gate</p>
    <h2 class="center">Reviews</h2>
    <div class="reviews">
      <article class="review">
        <div class="who-row"><span class="avatar a1">DP</span><div><strong>Dana Pell</strong><div class="stars" aria-label="5 stars">★★★★★</div><div class="gmeta">Google review · 2 weeks ago</div></div></div>
        <p>Came for the free visit. Chubbs stood behind the rack for every squat and did not talk over the set. Hook stayed on the bar. I left with the first week written down, and my knees felt normal the next morning.</p>
      </article>
      <article class="review">
        <div class="who-row"><span class="avatar a2">ML</span><div><strong>Marcus Lee</strong><div class="stars" aria-label="5 stars">★★★★★</div><div class="gmeta">Google review · a month ago</div></div></div>
        <p>The weight room looks out on the range. Racks are straight, the 45s read the right way, and the turf lane is about twenty steps from the bench. It is a gym that happens to sit on a golf course, not a poster taped to a warehouse.</p>
      </article>
      <article class="review">
        <div class="who-row"><span class="avatar a3">PS</span><div><strong>Priya Shah</strong><div class="stars" aria-label="4 stars">★★★★<span class="star-off">★</span></div><div class="gmeta">Google review · 3 weeks ago</div></div></div>
        <p>He learned my name before he loaded anything. He was on the floor at 7:10, which is what they advertise. I wish the coached day ran past 3. He does not pretend that it does, and the weekend is carts, not him.</p>
      </article>
      <article class="review">
        <div class="who-row"><span class="avatar a4">CA</span><div><strong>Chris Alvarez</strong><div class="stars" aria-label="5 stars">★★★★★</div><div class="gmeta">Google review · last Saturday</div></div></div>
        <p>The Saturday cart rolled past the bays twice. Hot dog was off the grill, the burger too, not a steamer tray. I got both between a bucket of balls. That is the weekend meal, since the coach is not in on Saturday.</p>
      </article>
      <article class="review">
        <div class="who-row"><span class="avatar a5">EB</span><div><strong>Ellen Brooks</strong><div class="stars" aria-label="5 stars">★★★★★</div><div class="gmeta">Google review · 6 days ago</div></div></div>
        <p>The counter is stocked like a real gym: pre-workout, whey, creatine, BCAAs. The person there told me what to eat after the session in one sentence. No speech. I used it at dinner.</p>
      </article>
      <article class="review">
        <div class="who-row"><span class="avatar a6">AW</span><div><strong>Andre Williams</strong><div class="stars" aria-label="5 stars">★★★★★</div><div class="gmeta">Google review · a month ago</div></div></div>
        <p>Green lockers, shoes under the bench, the range out the front door. I held up the guest card and they waved me through. Staff at the gate knew the list. Nobody asked me to pay on the way in.</p>
      </article>
    </div>
    <div class="quotes">
      <blockquote>
        <p>I have belonged to gyms that hung a golf photo on the wall and called it a theme. This one has the green outside the glass and a coach in the rack. The card got me in. Thursday is why I came back.</p>
        <footer>Jordan Hale · member since spring</footer>
      </blockquote>
      <blockquote>
        <p>The gold jacket is in the case by the desk. They were straight about it: loyal members earn it, the way the pros used to play for it. I am not there yet. The Sunday burger was still worth the drive in from town.</p>
        <footer>Sam Ortega · comes for the carts and stays for Fridays</footer>
      </blockquote>
    </div>
  </div>
</section>

<section class="section" id="services">
  <div class="wrap">
    <p class="label center">Training, with you at the center</p>
    <h2 class="center">Explore the floor</h2>
    <p class="center muted">Your coach will tell you what is on the schedule and which part of it is yours.</p>
    <div class="cards">
      <article><p class="label">The bar and the rack</p><h3>Strength training</h3><p>Everyday work starts with a lift you understand and a weight you can own.</p><a class="link" href="claim/claim.php">Explore</a></article>
      <article><p class="label">One coach</p><h3>Personal training</h3><p>Your pace, your sets, written down. Change what you came to change.</p><a class="link" href="claim/claim.php">Explore</a></article>
      <article><p class="label">Show up with people</p><h3>Group classes</h3><p>A class that matches your level, your week, and your knees.</p><a class="link" href="claim/claim.php">Explore</a></article>
      <article><p class="label">Around the work</p><h3>Nutrition counseling</h3><p>What to eat, when, and why, in language you can use at dinner.</p><a class="link" href="claim/claim.php">Explore</a></article>
      <article><p class="label">First day welcome</p><h3>Comfort &amp; beginners</h3><p>Tell us what would make the floor feel less like a test.</p><a class="link" href="claim/claim.php">Explore</a></article>
      <article><p class="label">See it first</p><h3>New member visits</h3><p>Walk the racks, meet a coach, and talk through the goal before you join.</p><a class="link" href="claim/claim.php">Explore</a></article>
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
    <details><summary>What do I show at the gate?</summary><p>The guest card. The first 100 people who leave a name, email, and phone get one. Hold it up and you are in. There is nothing to pay.</p></details>
    <details><summary>Who gets the gold jacket?</summary><p>The most loyal members. It is the jacket the pros used to play for. It stays in the case by the desk until your name is on the Friday list.</p></details>
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
        <a class="btn" href="#claim">Claim a free spot</a>
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
