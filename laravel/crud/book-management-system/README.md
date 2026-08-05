# 📚 Book Management System

A simple Laravel CRUD application for managing books. This project is being developed step by step to practice core Laravel concepts.

---

## ✅ Completed Features

| Module | Status |
|--------|:------:|
| Project Setup | ✅ |
| Book Model | ✅ |
| Books Migration | ✅ |
| Resource Controller | ✅ |
| Resource Routes | ✅ |
| Index Page (Books List) | ✅ |
| Create Page (Add Book Form) | ✅ |
| Show Page (Book Details) | ✅ |
| Basic Tailwind UI | ✅ |

---

## 📂 Book Fields

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

## 📁 Project Structure

```text
app/
├── Models/
│   └── Book.php
│
├── Http/
│   └── Controllers/
│       └── BookController.php

database/
└── migrations/
    └── create_books_table.php

resources/
└── views/
    └── Book/
        ├── index.blade.php
        ├── create.blade.php
        └── show.blade.php

routes/
└── web.php
```

---

## 🛠️ Laravel Concepts Covered

- MVC Architecture
- Models
- Migrations
- Resource Controllers
- Resource Routing
- Blade Templates
- Dynamic Routing
- Route Model Binding
- Passing Data to Views (`compact()`)
- Blade `@foreach`
- Named Routes
- Tailwind CSS Integration

---

## 🚀 Next Steps

- Edit Book
- Update Book
- Delete Book
- Form Validation
- Success Messages
- Search
- Pagination
- Image Upload

---

### Built with

- Laravel
- Blade
- Tailwind CSS
- MySQL