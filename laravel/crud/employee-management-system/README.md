# Employee Management System (Laravel CRUD)

A simple Laravel CRUD application for managing employee records.

## 🚀 Features Implemented

* Employee CRUD setup
* Employee Model
* Employee Migration
* Employee Controller
* Routing
* Employee Creation Form
* Employee Listing
* Form Validation
* Mass Assignment using `$fillable`

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
        └── create.blade.php

routes/
└── web.php
```

## ✅ Current Progress

* Database migration created
* Employee model configured
* `$fillable` implemented
* CRUD routes created
* `index()`, `create()`, and `store()` methods implemented
* Create employee form completed
* Employee listing page completed
* Server-side validation implemented

## 🛠️ Tech Stack

* Laravel
* PHP
* Blade
* MySQL
* HTML

## 📌 Next Steps

* Show Employee
* Edit Employee
* Update Employee
* Delete Employee
* Improve UI with Bootstrap or Tailwind CSS
