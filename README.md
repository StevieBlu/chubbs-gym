# Chubbs Gym

Gym website with member registration, login and dashboard (PHP + MySQL).

## Pages

- `index.php` — home
- `gallery.php` — photo gallery
- `register/register.php` — create a member account
- `login/login.php` — log in
- `dashboard/dashboard.php` — member dashboard (login required)
- `logout/logout.php` — end the session

Photos live in `images/`. Coaching photos show Chubbs actually spotting or cueing a normal lift: a squat with the hook on the bar, bench, row, lunge, pull-up, carry, kettlebell hinge, and a range lesson. Facility photos are the 9th Green itself. `guest-card.jpg` is the ticket, and `gold-jacket.jpg` is the jacket loyal members earn. The driving range, the lesson, the portrait, and the grass portrait come from the Chubbs asset pack.

The gym is the 9th Green at 9:00 PM Waterbury, in Waterbury, Connecticut. The first 100 guests are free. Claiming a spot saves a name, email, and phone in the `leads` table. Log in as `chubbs` and open the dashboard to read them. Chubbs is on the floor Monday through Friday, 7am to 3pm. Weekends, hot dog and hamburger carts travel the green. Show the guest card at the gate. The most loyal members earn the gold jacket.

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
