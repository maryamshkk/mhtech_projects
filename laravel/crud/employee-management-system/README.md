# Employee Management System (Laravel CRUD)

A Laravel CRUD application for managing employee records with complete Create, Read, Update, and Delete functionality.

## 🚀 Features

* Complete Employee CRUD Operations
* Employee Registration
* View All Employees
* View Individual Employee Details
* Update Employee Information
* Delete Employee Records
* Form Validation
* Mass Assignment using `$fillable`
* Clean MVC Architecture
* Blade Template Views

## 🗂️ Employee Attributes

| Attribute    | Type    |
| ------------ | ------- |
| Employee ID  | String  |
| Full Name    | String  |
| Email        | String  |
| Phone Number | String  |
| Department   | String  |
| Position     | String  |
| Salary       | Decimal |
| Joining Date | Date    |
| Address      | Text    |

## 📁 Project Structure

```text
app/
├── Http/Controllers/
│   └── EmployeeController.php
└── Models/
    └── Employee.php

database/
└── migrations/

resources/
└── views/
    └── Employee/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        └── show.blade.php

routes/
└── web.php
```

## ✅ Implemented Functionality

* Employee migration
* Employee model
* `$fillable` configuration
* CRUD routes
* Resource controller
* Create employee
* Display all employees
* View single employee
* Edit employee
* Update employee
* Delete employee
* Request validation
* Redirects with responses

## 🛠️ Tech Stack

* Laravel
* PHP
* Blade
* MySQL
* HTML
