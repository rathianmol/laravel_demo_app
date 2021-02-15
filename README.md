Hey!
Worked on a demo Laravel CRUD App.
Below is how I tackled the problem:

1. New laravel Installation: 
$ composer create-project laravel/laravel example-app

1.1 Resolving installation errors:
SERVER ERROR 500 AFTER $ php artisan serve
(inside project root)
$ touch .env
$ mv .env.example .env
$ php artisan key:generate
$ php artisan cache:clear
$ php artisan config:clear
$ composer dump-autoload

Then updated the .env file with my local MySQL's configuration.

2. Migration:

$ php artisan make:model Employee --all  

Creating model, migration , Controller, etc.

After making necessary changes to file, such as migration file, to resemble data
structuring of the CSV file:

$ php artisan migrate 

Now tables are generated in the respective database.

3. Seeding

First, I placed the employee_data.csv file into the resources folder.

Then I made my seeder class:

$ php artisan make:seeder EmployeeSeeder

After writing the logic to read/parse the CSV data, I then populated the database with:

$ php artisan db:seed --class=MemberSeeder

4. CRUD APPLICATION

With the EmployeeController already created beforehand, 

'Route::resource('employee', EmployeeController);' inside web.php gave me all the
needed CRUD routes for Employee.

Made employee folder inside view folder to hold all of my CRUD views.

Added necessary logic to controller class for CRUD events to smoothly function.

5. AUTHENTICATION 

$ composer require laravel/ui --dev

$ php artisan ui:auth

In LoginController , redirectTo = /employee, so that User sees the lists of 
employees after a successful login.

******************************************************************
A Guest can access list of employees:
http://localhost:8000/employee

List of employee link shall be given, when clicked, minimal info of employee is displayed.
Sensitive information can only be viewed by logged-in users.

Logged-in users also get CRUD capabilities. 

So basically logged in users are like admin. 

Users/admin not implemented for this. I was short on time. 
But a login system is implemented.

*******************************************************************

Before running.
1. Put employee_data.csv inside resources folder.
2. Config your .env file with your local mysql database.
3. Run: php artisan db:seed --class=MemberSeeder
(This shall populate the database with data from CSV file). 

4. (Guests) View list of all employees and see their partial data:
http://localhost:8000/employee

5. (Logged In Users) View list of all employees, see their entire info, with CRUD  

features:
http://localhost:8000/employee







