# Laravel Student Management

A simple Student Management System built with Laravel for learning purposes. This project allows users to manage students with role-based authentication.

## Features

### Student Management (With Authentication)
- User authentication (roles: Admin/User)
- **Admin**: View, create, edit, and delete students
- **User**: Only view the list of students

## Installation

1. **Clone the repository**
   ```sh
   git clone https://github.com/DrLivesey-Shura/Student-Managment-Laravel.git
   ```

2. **Install dependencies**
   ```sh
   composer install
   ```

3. **Set up environment variables**
   - Copy `.env.example` to `.env`
   - Configure database settings in `.env`

4. **Generate application key**
   ```sh
   php artisan key:generate
   ```

5. **Run migrations**
   ```sh
   php artisan migrate
   ```

6. **Seed the database (for default roles and users)**
   ```sh
   php artisan db:seed
   ```

7. **Run the development server**
   ```sh
   php artisan serve
   ```
   The project will be available at `http://127.0.0.1:8000/`

## Usage
- Register or log in as a user.
- If logged in as an **admin**, manage students (CRUD operations available).
- If logged in as a **user**, only view students.

## Technologies Used
- Laravel
- Blade Templating Engine
- MySQL (or any configured database in `.env`)
- Bootstrap (for basic styling)
- Laravel Authentication (for role-based access control)

## Contributing
This project was built for learning purposes, but feel free to fork and improve it.
