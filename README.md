# Midnight POS — Point-of-Sale System

A full-featured web-based Point-of-Sale (POS) application built with **Laravel**, **Livewire / Flux UI**, and **Tailwind CSS** for **IT0049 (Web System Technologies)**.

## Features

- **Staff Authentication:** All dashboard, management, and sales routes are protected behind staff login. Public self-registration is disabled so only authorized staff can create new staff accounts.
- **POS Overview Dashboard:** Displays total revenue, catalog counts, recent transactions, and a low-stock watchlist.
- **Product Management (CRUD):** Create, view, edit, and delete products with price, stock quantity, and validated image uploads prepared for web display.
- **Customer Management (CRUD):** Manage customer records (`full_name`, `email`, `phone`).
- **Staff Management (CRUD):** Manage staff accounts (`username`, `full_name`, hashed passwords, and validated profile avatars)[cite: 1].
- **Record Sale Workflow:** Select a product, an optional customer (or Walk-in), and quantity sold[cite: 1]. Uses database transactions and row locking to decrement `stock_quantity` safely and rejects sales exceeding available stock[cite: 1].
- **Sales History:** Paginated log displaying product, customer, staff member, quantity, total price, and timestamp[cite: 1].

## Database Schema

- **`products`**: `id`, `name`, `price`, `stock_quantity`, `image`, `created_at`, `updated_at`[cite: 1, 2]
- **`customers`**: `id`, `full_name`, `email`, `phone`, `created_at`, `updated_at`[cite: 1, 2]
- **`users`**: `id`, `username`, `full_name`, `email`, `password`, `avatar`, `created_at`, `updated_at`[cite: 1, 2]
- **`sales`**: `id`, `product_id` (FK), `customer_id` (nullable FK), `sold_by` (FK → `users.id`), `quantity`, `total_price`, `created_at`, `updated_at`[cite: 1, 2]

## Tech Stack

- **Backend:** PHP 8.3+, Laravel 13, Laravel Fortify[cite: 2, 4]
- **Frontend:** Blade, Livewire, Flux UI, Tailwind CSS, Vite
- **Database:** SQLite (local) / MySQL (production)[cite: 2]

## Local Installation & Setup

1. **Clone the repository**
   ```bash
   git clone [https://github.com/](https://github.com/)<your-username>/<your-repo-name>.git
   cd <your-repo-name>
   ```

2. **Install PHP and Node dependencies**
   ```bash
   composer install
   npm install
   npm run build
   ```

3. **Configure environment variables**
   Create a `.env` file in the project root:
   ```env
   APP_NAME="Midnight POS"
   APP_ENV=local
   APP_KEY=
   APP_DEBUG=true
   APP_URL=[http://127.0.0.1:8000](http://127.0.0.1:8000)

   DB_CONNECTION=sqlite
   # For MySQL, uncomment and configure:
   # DB_CONNECTION=mysql
   # DB_HOST=127.0.0.1
   # DB_PORT=3306
   # DB_DATABASE=midnight_pos
   # DB_USERNAME=root
   # DB_PASSWORD=

   SESSION_DRIVER=database
   FILESYSTEM_DISK=public
   QUEUE_CONNECTION=database
   CACHE_STORE=database
   ```

4. **Generate application key, run migrations with seeders, and link storage**
   ```bash
   php artisan key:generate
   php artisan migrate --seed
   php artisan storage:link
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```
   Open `http://127.0.0.1:8000/login` in your browser.

## Default Login Credentials

Running `php artisan migrate --seed` creates a default staff account along with sample products and customers:

- **Username:** `admin`
- **Password:** `password123`

## Project Structure

- `app/Http/Controllers/` — `ProductController`, `CustomerController`, `StaffController`, `SaleController`[cite: 2]
- `app/Http/Requests/` — Form request validation rules for products, customers, staff, and sales[cite: 2]
- `app/Models/` — Eloquent models (`Product`, `Customer`, `User`, `Sale`) and relationships[cite: 2]
- `database/migrations/` — Schema migrations for all POS tables[cite: 2]
- `database/seeders/DatabaseSeeder.php` — Initial admin user, sample products, and sample customers[cite: 2]
- `resources/views/` — Blade templates for dashboard, products, customers, staff, and sales[cite: 2]