# How to run laravel project from git clone?

## Requirements

-   PHP
-   Composer
-   Node.js
-   MySQL (XAMPP)

## Steps

1. Clone the project
2. Open the application folder in terminal
3. Run command **composer install**
4. Copy **.env.example** file to **.env** file in the root folder. Run command **cp .env.example .env**
5. Open the **.env** file and change the database name (**DB_DATABASE**), username (**DB_USERNAME**) and password (**DB_PASSWORD**) field, so all correspond to your configuration. By default, the username is **root** and the password field is empty (**correct for XAMPP**).
6. Start **XAMPP** and its modules **Apache** and **MySQL**
7. Run command **php artisan key:generate**
8. Run command **php artisan migrate**
9. Run (optional) command **php artisan db:seed**
10. Run command **npm install**
11. Run command **npm run dev** or **npm run production**
12. Run command **php artisan serve**
13. Application is running on **localhost:8000** (127.0.0.1:8000)
