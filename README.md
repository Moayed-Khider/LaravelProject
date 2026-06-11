# Laravel Role-Based Access Control

## About
Role-based access control system built with Laravel 9.

## Requirements
- PHP 8.2
- Laravel 9
- MySQL

## Run the project
php artisan serve

## Main Files
- `app/Models/User.php` — User model
- `app/Models/Role.php` — Role model
- `app/Http/Middleware/RoleMiddleware.php` — Role middleware
- `app/Http/Controllers/AuthController.php` — Auth controller
- `routes/web.php` — Web routes
- `resources/views/login.blade.php` — Login page
- `resources/views/dashboard.blade.php` — Dashboard page
