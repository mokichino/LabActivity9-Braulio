# Lab Activity 9 – Barangay Bakuna Tracker

Alessandra Braulio · 4-334 Full-Stack Web Development

A vaccination schedule dashboard for the Barangay Matina Crossing Health Center, built with Laravel Blade, Tailwind CSS (v3) and Vite.

## Login

| Email | Password |
|---|---|
| nurse.braulio@bakuna.test | bakuna2026 |

## How to run

1. Install the dependencies
   ```
   composer install
   npm install
   ```
2. Copy `.env.example` to `.env` and run `php artisan key:generate`
3. Set up the database. I used MySQL in XAMPP, so create a database named `bakuna_tracker` in phpMyAdmin and put this in `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=bakuna_tracker
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   (SQLite also works, just keep `DB_CONNECTION=sqlite`.)
4. Migrate and seed
   ```
   php artisan migrate:fresh --seed
   ```
5. Run these in two terminals
   ```
   php artisan serve
   npm run dev
   ```
6. Open http://127.0.0.1:8000 and sign in.

## Pages

- `/login` – sign in page
- `/dashboard` – stats, overdue alert banner and overdue residents
- `/schedule` – full vaccine schedule table
