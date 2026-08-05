# Student Management System (Laravel CRUD)

A Laravel CRUD application for managing student records with complete Create, Read, Update, and Delete functionality.

## 🚀 Features

* Complete Student CRUD Operations
* Student Registration
* View All Students
* View Individual Student Details
* Update Student Information
* Delete Student Records
* Form Validation
* Mass Assignment using `$fillable`
* Clean MVC Architecture
* Blade Template Views

## 🗂️ Student Attributes

| Attribute     | Type    |
| ------------- | ------- |
| Student ID    | String  |
| Full Name     | String  |
| Email         | String  |
| Phone Number  | String  |
| Gender        | String  |
| Date of Birth | Date    |
| Department    | String  |
| Semester      | Integer |
| Address       | Text    |

## 📁 Project Structure

```text
app/
├── Http/Controllers/
│   └── StudentController.php
└── Models/
    └── Student.php

database/
└── migrations/

resources/
└── views/
    └── Student/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        └── show.blade.php

routes/
└── web.php
```

## ✅ Implemented Functionality

* Student migration
* Student model
* `$fillable` configuration
* CRUD routes
* Resource controller
* Create student
* Display all students
* View single student
* Edit student
* Update student
* Delete student
* Request validation
* Redirects with responses

## 🛠️ Tech Stack

* Laravel
* PHP
* Blade
* MySQL
* HTML
