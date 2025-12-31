<img width="2032" height="1105" alt="Screenshot 2025-12-30 at 3 31 04 PM" src="https://github.com/user-attachments/assets/14daaad2-c599-47ce-be3f-0f833f48af40" />
# Laravel 12 Admin Starter Kit

Built with **Tabler** (Bootstrap 5)

A lightweight and reusable Laravel 12 starter project featuring a clean admin panel, authentication, and basic user management. Designed to serve as a solid foundation for internal tools and future projects.

## ✨ Features

-   Custom Laravel Authentication
-   Admin Dashboard
-   User Management (CRUD)
-   Tabler UI (Bootstrap 5–based admin template)
-   Clean and extendable project structure

## 🛠 Requirements

-   PHP 8.2+
-   Composer
-   MySQL / MariaDB (or compatible database)

## 🚀 Installation

Follow the steps below to get the project up and running:

```bash
git clone https://github.com/AkibSiddiki/laravel-12-cms-starting-kit.git

cd laravel-12-cms-starting-kit

rm -rf .git

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan db:seed --class=AdminUserSeeder
```

## 🔐 Default Admin Credentials

After seeding, you can log in using:

-   **Email**: admin@example.com
-   **Password**: password

⚠️ **Make sure to change these credentials in production.**

## 📁 Purpose

This repository is intended to be used as:

-   A starter template for new Laravel projects
-   A shared base for team development

## 📄 License

This project is intended for internal use. Add a license if you plan to make it public.
