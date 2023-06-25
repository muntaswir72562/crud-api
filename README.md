# CRUD API using Laravel

This repository provides a simple CRUD (Create, Read, Update, Delete) API built using the Laravel framework. The API allows you to manage resources through basic HTTP operations. This README.md file serves as a guide to help you understand the project structure, set up the environment, and start using the API.

## Prerequisites

Before getting started, ensure that you have the following prerequisites installed on your system:

- PHP (>= 7.4)
- Composer
- Laravel (>= 8.0)
- MySQL (or any other supported database)

## Installation

1. Clone the repository to your local machine:

```bash
git clone https://github.com/your-username/crud-api-laravel.git
```

2. Navigate to the project directory:

```bash
cd crud-api-laravel
```
3. Install the dependencies using Composer:

```bash
composer install
```
4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database connection details within this file according to your environment setup.

5. Run the database migrations to create the required tables:

```bash
php artisan migrate
```
6.  seed the database with sample data, run the following command:

```bash
php artisan db:seed
```
7. Start the development server:

```bash
php artisan serve
```

## API Endpoints

The following endpoints are available:

- `GET /api/v1/product` - Get all product
- `GET /api/v1/product/{id}` - Get a specific product by ID
- `POST /api/v1/product` - Create a new product
- `PUT /api/v1/product/{id}` - Update a product by ID
- `DELETE /api/v1/product/{id}` - Delete a product by ID