<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# To-Do List API

This project is a REST API for managing a To-Do List, developed using Laravel 12.7.2 and SQLite.

## Technologies

- **Backend**: Laravel 12.7.2
- **Database**: SQLite
- **API**: REST
- **Authentication**: Not used (open access)

## Project Structure

- **app/Http/Controllers**: Controllers for handling API requests.
- **app/Models**: Models for interacting with the database.
- **routes/api.php**: API routes for handling requests.
- **database/migrations**: Migrations for creating database tables.

## Installation

1. Clone the repository:

   ```bash
   git [clone https://github.com/yourusername/todo-api.git](https://github.com/Soulrom/todo-api.git)
   cd todo-api
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Create an SQLite database:

   ```bash
   touch database/database.sqlite
   ```

4. Run migrations:

   ```bash
   php artisan migrate
   ```

5. Start the server:

   ```bash
   php artisan serve
   ```

The API will be available at: [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Using the API

1. **Create a new task (POST /api/tasks)**

   **Request**:
   ```json
   {
       "title": "Task title",
       "description": "Task description"
   }
   ```

   **Response**:
   ```json
   {
       "id": 1,
       "title": "Task title",
       "description": "Task description",
       "created_at": "<current_date>",
       "updated_at": "<current_date>"
   }
   ```

2. **Get a list of tasks (GET /api/tasks)**

   **Response**:
   ```json
   [
       {
           "id": 1,
           "title": "Task title",
           "description": "Task description",
           "created_at": "<current_date>",
           "updated_at": "<current_date>"
       }
   ]
   ```

3. **Get a specific task (GET /api/tasks/{id})**

   **Response**:
   ```json
   {
       "id": 1,
       "title": "Task title",
       "description": "Task description",
       "created_at": "<current_date>",
       "updated_at": "<current_date>"
   }
   ```

4. **Update a task (PUT /api/tasks/{id})**

   **Request**:
   ```json
   {
       "title": "Updated task title",
       "description": "Updated task description"
   }
   ```

   **Response**:
   ```json
   {
       "id": 1,
       "title": "Updated task title",
       "description": "Updated task description",
       "created_at": "<current_date>",
       "updated_at": "<current_date>"
   }
   ```

5. **Delete a task (DELETE /api/tasks/{id})**

   **Response**:
   ```json
   {
       "message": "Task successfully deleted"
   }
   ```

## Notes

The project includes error handling to properly process invalid requests.
