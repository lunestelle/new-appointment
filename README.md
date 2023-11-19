# Laravel-Appointment

Installation:
- Install PHP 7.2.34 -> https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.2.34/xampp-portable-windows-x64-7.2.34-0-VC15.zip/download
- Install Composer version 2.6.5 -> https://getcomposer.org/download/

Note:
- Check first if naa na kay PHP by php -v
- If naa niya lahi na version you can refer ani -> https://www.devopsschool.com/blog/how-to-downgrade-php-from-8-0-0-to-7-1-32-in-xampp-8-0-0/

System Setup
- Once the project is clone or extracted from zip
- Go to the project directory and run composer install
- cp `.env.example .env`

Example:
![image](https://github.com/lunestelle/Laravel-Appointment/assets/119985247/5970b2c4-9848-4c61-96e7-56253cf7af61)

- Create Database
    - To install and run the application correctly. Simply go to phpmyadmin and make a new database.
![image](https://github.com/lunestelle/Laravel-Appointment/assets/119985247/93935c81-a2cc-44a7-8f3e-9266e085783f)

- After you’ve set up the environment, you’ll need to establish a database configuration for it. Use the following command to create database tables: `php artisan migrate`.
- Next is `php artisan db:seed`.
- Lastly, type `php artisan serve` in your command prompt. The purpose of using PHP artisan serve (PHP built-in server) is just for testing and easy starting your project it should not be used in real website deployment.

# Credentials
- Admin
  - Email: admin@admin.com
  - Password: admin
- Operator
  - Email: john@gmail.com or ash@gmail.com
  - Password: password
- Employee (Still in progress)
