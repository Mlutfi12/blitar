# Blitar Government Website

This repository is built to create website for Blitar government, using Laravel 12.

## About

This project serves as the official website for the Blitar government, providing citizens and visitors with access to government services, information, and resources. The website is built using Laravel 12, a modern PHP framework that ensures security, scalability, and maintainability.

## Features

- Government services portal
- Public information access
- News and announcements
- Contact information and office directories
- Document management system
- Responsive design for mobile and desktop access

## Technology Stack

- **Framework**: Laravel 12
- **Language**: PHP 8.2+
- **Database**: MySQL/PostgreSQL
- **Frontend**: Blade Templates, CSS3, JavaScript
- **Package Manager**: Composer

## Requirements

- PHP 8.2 or higher
- Composer
- MySQL 8.0+ or PostgreSQL 13+
- Node.js and NPM (for frontend assets)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Mlutfi12/blitar.git
   cd blitar
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install Node.js dependencies:
   ```bash
   npm install
   ```

4. Create environment file:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Configure your database in `.env` file

7. Run database migrations:
   ```bash
   php artisan migrate
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

## Contributing

This project is developed and maintained for the Blitar government. For contributions or issues, please contact the development team.

## License

This project is proprietary software developed for the Blitar government.
