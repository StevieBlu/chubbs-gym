# Chubbs Gym

Gym website with member registration, login and dashboard (PHP + MySQL).

## Pages

- `index.php` — home
- `gallery.php` — photo gallery
- `register/register.php` — create a member account
- `login/login.php` — log in
- `dashboard/dashboard.php` — member dashboard (login required)
- `logout/logout.php` — end the session

Photos live in `images/`. The original card is `chubbs.jpg`. The coaching photos are one scene each: deadlift, squat with the hook, bench with the wooden hand, and a press. The range, the lesson, the portrait, and the happy place come from the Chubbs asset pack. A picture is not reused on a second page. A missing image shows a placeholder.

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
