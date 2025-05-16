# A-World Travel Website - Backend (Laravel)

This is the backend implementation for the **A-World** travel website template, originally built with HTML/CSS/JS. The backend is developed using **Laravel (PHP)** to provide a fully functional, dynamic experience.

## 🧭 Project Overview

A-World is a travel agency website template that has been enhanced with a Laravel-based backend to make it fully dynamic and ready for production use. This project is designed for developers or travel businesses who want a professional, responsive website with a functional backend for managing tour packages, bookings, contact messages, and newsletter subscriptions.


## 🔧 Tech Stack

- **Backend Framework:** Laravel 10+
- **Database:** MySQL
- **Frontend Template:** [A-World by Themewagon](https://themewagon.com/themes/a-world/)
- **Authentication:** Laravel Breeze / Sanctum (if used)
- **APIs:** RESTful APIs for frontend integration
- **Email:** Laravel Mail (for contact form, booking confirmations, etc.)

## 📦 Features

- ✅ Dynamic Tour Packages (CRUD)
- ✅ Contact Us form (with email notifications & admin panel inbox)
- ✅ Newsletter subscription system
- ✅ Booking management (user requests, admin approval)
- ✅ Admin panel to manage all site content (if implemented)
- ✅ Validation, form handling, error feedback
- ✅ API endpoints for frontend consumption
- ✅ Security best practices (CSRF protection, validation, auth middleware)

## ⚙️ Installation

```bash
git clone https://github.com/h35h7m/A-World.git
cd a-world-backend
composer install
cp .env.example .env
php artisan key:generate
# Set your DB credentials in .env
php artisan migrate
php artisan serve
