# Laravel Blog Website

A simple blog website built with Laravel using Blade templating engine.

## Features
- Laravel 12.x
- Blade templating for frontend views

## Requirements
- PHP >= 8.2
- Composer
- MySQL
- Git

## Installation

### 1. Clone the repository
```bash
git clone https://github.com/firozkabir25/iBlog.git
cd iBlog
```

### 2. Install dependencies
```bash
composer install
```

### 3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```
- Update `.env` with your database details.

### 4. Run migrations and seed
```bash
php artisan migrate --seed
```

### 5. Serve the application
```bash
php artisan serve
```
The app will be available at:  
`http://127.0.0.1:8000`

---

## Git Commands to Push
If pushing for the first time:
```bash
git init
git add .
git commit -m "Initial commit - Laravel Blog Website"
git branch -M main
git remote add origin https://github.com/firozkabir25/iBlog.git
git push -u origin main
```

---

## License
This project is open-sourced under the [MIT license](LICENSE).
