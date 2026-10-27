# Chubbs Gym

Gym website with member registration, login and dashboard (PHP + MySQL).

## Pages

- `index.php` — home
- `gallery.php` — photo gallery
- `register/register.php` — create a member account
- `login/login.php` — log in
- `dashboard/dashboard.php` — member dashboard (login required)
- `logout/logout.php` — end the session

Photos live in `images/`. The original card is `chubbs.jpg`. Coaching photos show Chubbs spotting and cueing — deadlift, squat, bench, row, lunge, kettlebell, pull-up, carry, and stretch — each file used once. Facility photos are the 9th Green itself: the clubhouse, the floor, the night range, the racks, the turf lane, the weekend food cart, the supplement counter, the lobby, the lockers, the class corner, the sled, and the practice green. The driving range, the lesson, the portrait, and the grass portrait come from the Chubbs asset pack. A picture is not reused on a second page. A missing image shows a placeholder.

The gym is the 9th Green at 9:00 PM Waterbury, in Waterbury, Connecticut. The first 100 guests are free. Chubbs is on the floor Monday through Friday, 7am to 3pm. Weekends, hot dog and hamburger carts travel the green.

## Run it locally

PHP 8.1+ with the `mysqli` extension, and MySQL or MariaDB.

1. Create the database and table:

   ```bash
   mysql -u root -p < database.sql
   ```

2. Copy the database config and edit it if your credentials differ:

   ```bash
   cp config/db.local.example.php config/db.local.php
   ```

   The example matches MAMP (`root` / `root`, database `chubby`). This file is git-ignored.

3. Start the site from the project folder:

   ```bash
   php -S 127.0.0.1:8741
   ```

4. Open [http://127.0.0.1:8741](http://127.0.0.1:8741).

### MAMP

Import `database.sql` in phpMyAdmin, keep `config/db.local.php` pointed at MAMP's MySQL, put the folder in `htdocs`, and open `http://localhost:8888/`.
