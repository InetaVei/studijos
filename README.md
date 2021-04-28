# Students, Lectures and Grades application
### Content management system application with LARAVEL

CRUD (create/read/update/delete) application.
This app is built with Laravel framework. 

## Project features
- Admin can navigate through pages;
- Admin can manage projects table: add/delete/update project data;
- Admin can manage employees table: add/delete/update employee data and assign project to the employee;
- Admin can write grades for students;
- Admin can view students grades;

## Installation & Configuration
1. Clone this git repository;
2. Use AMPPS or other open-source platform;
3. Create new schema 'studijos' in your database; 
4. Rename **.env example** file to **.env** and configure Database:<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br> 
DB_DATABASE=studijos<br> 
DB_USERNAME=root<br>
DB_PASSWORD=mysql<br>
5. Run **php artisan migrate** to create tables.
6. To open project, run **php artisan serve** and follow the link.

## How does it looks like

<img width="796" alt="1" src="https://user-images.githubusercontent.com/74532995/116232322-a746ca00-a762-11eb-9163-b14f4fb6f82e.png"> <br>
<img width="803" alt="2" src="https://user-images.githubusercontent.com/74532995/116232327-a7df6080-a762-11eb-91f1-1f460b934e36.png"> <br>
<img width="803" alt="3" src="https://user-images.githubusercontent.com/74532995/116232328-a7df6080-a762-11eb-8c08-c5e878b13edb.png"> <br>
<img width="798" alt="4" src="https://user-images.githubusercontent.com/74532995/116232331-a7df6080-a762-11eb-9675-eb5fbe73e2c0.png"> <br>

## Authors
[Ineta](https://github.com/InetaVei)
