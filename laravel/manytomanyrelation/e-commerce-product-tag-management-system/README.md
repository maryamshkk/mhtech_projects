# 📚 Library Management System (One-to-One Relationship)

A simple Laravel CRUD project demonstrating a **One-to-One Relationship** between **Category** and **Book** with a clean Tailwind CSS interface.

---

## ✨ Features

| Module | Status |
|--------|:------:|
| Category CRUD | ✅ |
| Book CRUD | ✅ |
| One-to-One Relationship | ✅ |
| Form Validation | ✅ |
| Database Migrations | ✅ |
| Tailwind CSS UI | ✅ |
| Dashboard | ✅ |

---

## 🛠️ Tech Stack

| Technology | Usage |
|------------|-------|
| Laravel 13 | Backend Framework |
| PHP | Server-side Language |
| MySQL | Database |
| Blade | Templating Engine |
| Tailwind CSS | UI Styling |

---

## 📂 Project Structure

```
Category
├── Create
├── Read
├── Update
└── Delete

Book
├── Create
├── Read
├── Update
└── Delete
```

---

## 🔗 Relationship

```
Category (1)
     │
     │ hasOne
     ▼
Book (1)
```

- A Category has **one** Book.
- A Book belongs to **one** Category.

---

## 🚀 Completed

- Category CRUD
- Book CRUD
- One-to-One Relationship
- Dashboard
- Responsive UI using Tailwind CSS
- Form Validation
- Database Migrations