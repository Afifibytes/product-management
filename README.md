# Laravel API Application

This is a Laravel-based API that manages **Categories** and **Products** in both English and Arabic. The API provides full CRUD (Create, Read, Update, Delete) functionality for managing categories and products, along with filtering capabilities.

## Features

- Manage Categories and Products with multi-language support (English and Arabic).
- Full CRUD functionality for both Categories and Products.
- Filter products and categories using query parameters.
- Well-organized service-based architecture with validation separated into dedicated validators.


# API Endpoints

## Categories API

| Method | Endpoint             | Description                      | Request Body                           | Response                       |
|--------|----------------------|----------------------------------|----------------------------------------|--------------------------------|
| GET    | `/api/categories`    | List all categories              | N/A                                    | 200 OK, array of categories    |
| GET    | `/api/categories/{id}`| Get category by ID               | N/A                                    | 200 OK, category object        |
| POST   | `/api/categories`    | Create a new category            | `{ "name_en": "string", "name_ar": "string" }` | 201 Created, category object    |
| PUT    | `/api/categories/{id}`| Update a category by ID          | `{ "name_en": "string", "name_ar": "string" }` | 200 OK, updated category object |
| DELETE | `/api/categories/{id}`| Delete a category by ID          | N/A                                    | 204 No Content                 |

### Filters for Categories

- You can filter categories using query parameters:
    - `name_en`: Filter by English name
    - `name_ar`: Filter by Arabic name

Example:

GET /api/categories?name_en=Electronics

---

## Products API

| Method | Endpoint             | Description                      | Request Body                           | Response                       |
|--------|----------------------|----------------------------------|----------------------------------------|--------------------------------|
| GET    | `/api/products`      | List all products                | N/A                                    | 200 OK, array of products      |
| GET    | `/api/products/{id}` | Get product by ID                | N/A                                    | 200 OK, product object         |
| POST   | `/api/products`      | Create a new product             | `{ "name_en": "string", "name_ar": "string", "category_id": "integer" }` | 201 Created, product object     |
| PUT    | `/api/products/{id}` | Update a product by ID           | `{ "name_en": "string", "name_ar": "string", "category_id": "integer" }` | 200 OK, updated product object  |
| DELETE | `/api/products/{id}` | Delete a product by ID           | N/A                                    | 204 No Content                 |

### Filters for Products

- You can filter products using query parameters:
    - `name_en`: Filter by English name
    - `name_ar`: Filter by Arabic name
    - `category_id`: Filter by category ID

Example:

GET /api/products?name_en=Laptop&category_id=1

# Installation Instructions

Follow these steps to set up the Laravel API application on your local machine using Laravel Sail and Docker.

1. **Clone the Repository**

   First, clone the repository to your local machine:

   ```bash
   git clone https://github.com/afifibytes/product-management.git
   cd product-management

2. **Set Up Environment**

   Copy the .env.example file to create your own .env file:

   ```bash
   cp .env.example .env

3. **Start the Application**

    Use the following command to start your Laravel application in a Docker container:

   ```bash
   ./vendor/bin/sail up

4. **Run Migrations**

   ```bash
    ./vendor/bin/sail artisan migrate

5. **Seed the Database**

   If you want to populate the database with sample data, you can run the seeders:
   ```bash
   ./vendor/bin/sail artisan db:seed
