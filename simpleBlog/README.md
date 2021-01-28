# How to run laravel project from git clone?

## Requirements

-   PHP
-   Composer
-   Node.js (optional - for development)
-   MySQL (XAMPP)

## Steps

1. Clone the project
2. Open the application folder in terminal
3. Run command **composer install**
4. Run command **npm install** (optional - for development)
5. Copy **.env.example** file to **.env** file in the root folder. Run command **cp .env.example .env**
6. Open the **.env** file and change the database name (**DB_DATABASE**), username (**DB_USERNAME**) and password (**DB_PASSWORD**) field, so all correspond to your configuration. The username is **root** and the password field is empty by default (**correct for XAMPP**).
7. Start **XAMPP** and its modules **Apache** and **MySQL**
8. Run command **php artisan key:generate**
9. Run command **php artisan migrate**
10. Run command **php artisan db:seed** (optional)
11. Run command **php artisan serve**
12. Application is running on **localhost:8000** (127.0.0.1:8000)
