# 📚 Book Management System

A Laravel CRUD application for managing books. This project demonstrates the implementation of complete CRUD operations using Laravel's MVC architecture, Eloquent ORM, Blade templates, and Tailwind CSS.

---

## ✨ Features

| Feature | Status |
|---------|:------:|
| Create Book | ✅ |
| View All Books | ✅ |
| View Book Details | ✅ |
| Edit Book | ✅ |
| Delete Book | ✅ |
| Resource Routing | ✅ |
| Resource Controller | ✅ |
| Route Model Binding | ✅ |
| Blade Templates | ✅ |
| Tailwind CSS UI | ✅ |

---

## 📖 Book Information

Each book contains the following details:

- Title
- Author
- Category
- ISBN
- Publisher
- Publication Year
- Price
- Quantity
- Description

---

## 📂 Project Structure

```text
app/
├── Http/
│   └── Controllers/
│       └── BookController.php
│
├── Models/
│   └── Book.php

database/
└── migrations/
    └── create_books_table.php

resources/
└── views/
    └── Book/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        └── show.blade.php

routes/
└── web.php
```

---

## 🛠️ Technologies Used

- Laravel
- PHP
- MySQL
- Blade Templating Engine
- Tailwind CSS

---

## 📚 Laravel Concepts Practiced

- MVC Architecture
- Routing
- Resource Routes
- Resource Controllers
- Route Model Binding
- Eloquent ORM
- Database Migrations
- CRUD Operations
- Blade Templates
- Named Routes
- Form Handling
- CSRF Protection
- Tailwind CSS

---

## 🚀 CRUD Operations

| Operation | Description |
|----------|-------------|
| Create | Add a new book to the database |
| Read | Display all books and view individual book details |
| Update | Modify existing book information |
| Delete | Remove a book from the database |

---

## 🎯 Learning Outcome

This project demonstrates how to build a complete CRUD application in Laravel by implementing resource controllers, routing, Blade views, database migrations, and Eloquent ORM while following the MVC architecture.