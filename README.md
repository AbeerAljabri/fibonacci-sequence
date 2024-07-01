<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Fibonacci Sequence Generator

This is a Laravel application that generates the Fibonacci sequence based on a user input number. The application provides a form where the user can enter a number, and then it displays the Fibonacci sequence up to that number.

## Features

- Input validation to ensure the user enters a non-negative integer.
- Efficient Fibonacci sequence calculation using recursion with memoization.
- Display the Fibonacci sequence as a comma-separated list.
- Basic styling with CSS for a clean user interface.

## Requirements

- PHP 7.3 or higher
- Composer
- Laravel 8.x or higher

## Installation

1. **Clone the repository:**

   ```
   git clone https://github.com/your-username/fibonacci-generator.git
   cd fibonacci-generator
   ```

2. **Install dependencies:**

bash
Copy code
composer install
Set up your environment:

Copy the .env.example file to .env and configure your environment variables as needed.

bash
Copy code
cp .env.example .env
php artisan key:generate
Run the application:

Start the Laravel development server.

bash
Copy code
php artisan serve
Access the application:

Open your web browser and navigate to http://localhost:8000/fibonacci.
