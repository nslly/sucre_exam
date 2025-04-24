**Prerequisites**

**Before setting up the project, make sure you have the following installed:
**

* PHP

* Composer

* Laravel

* MySQL

**Installation**

1. Clone the repository:

git clone https://github.com/nslly/sucre_exam.git


2. Navigate to the project directory:

cd sucre_exam


3. Install the project dependencies:

composer install

4. Set up your .env file:

cp .env.example .env


5. Generate the application key:

php artisan key:generate


6. Set up the database:

Open .env and update the database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sucre_exam
DB_USERNAME=root
DB_PASSWORD=


7. Run the migrations:

php artisan migrate


8. Seed the database with sample users:

php artisan db:seed

