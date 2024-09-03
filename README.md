# A Job Posting Board for Organizations
Toolkit is a platform where organizations can post job vacancies looking for potential employees for the job.

## Language and Framework
This project is developed with [Laravel 11.x](https://laravel.com/docs/11.x)  PHP framework.

## Setup Prerequisites
- Install PHP 8.0 or higher
- Create a database and setup username and password

## Installation
To clone the repo, run the following command;
``` 
git clone https://github.com/emchegep/toolkit.git
```
Add `` .env `` file in project root by copying the `` .env.example`` file. Simply run, `` cp .env.example .env``

Run the following commands to set up the project;
```
php composer update
php artisan key:generate
npm install
```
Open ``.env`` file and update the variables accordingly

To run all the databases migrations, execute the following command;

``php artisan migrate``  or 
   
``php artisan migrate --seed`` if you want to seed the database.

## Run the application
To run the application, simply run  ``php artisan serve`` or configure a virtual host.

To watch changes during development, run ``npm run dev``
