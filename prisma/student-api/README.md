# Prisma with Express.js & Node.js – Learning Playlist

A comprehensive beginner-to-intermediate playlist for learning **Prisma ORM** with **Node.js**, **Express.js**, and **MySQL**. This series focuses on understanding concepts first and then implementing them in a professional Express application.

---

## 📚 Topics Covered

### Module 1 — Prisma Fundamentals

* Introduction to Prisma
* What is an ORM?
* Why use Prisma?
* Prisma Architecture
* Prisma Workflow
* Prisma vs Raw SQL

---

### Module 2 — Prisma Installation & Setup

* Installing Prisma CLI
* Installing Prisma Client
* Difference between Prisma CLI and Prisma Client
* Initializing Prisma (`npx prisma init`)
* Understanding the `prisma` folder
* Understanding `schema.prisma`
* Understanding the `.env` file
* `DATABASE_URL` configuration

---

### Module 3 — Database Connection

* Connecting Prisma to MySQL
* `generator` block
* `datasource` block
* Database providers
* Environment variables
* Connection string structure
* Database connection flow

---

### Module 4 — Prisma Schema & Models

* Creating Models
* Model Syntax
* Prisma Data Types
* Field Attributes

  * `@id`
  * `@default()`
  * `@unique`
  * `@updatedAt`
* Required vs Optional Fields
* Default Values
* Auto Increment
* Date & Time Fields
* Model to Database Mapping

---

### Module 5 — Prisma Migrations

* What are Migrations?
* Why Migrations are Important
* Creating Migrations
* Migration Naming
* Migration Workflow
* Migration History
* Understanding `migration.sql`
* `prisma migrate dev`
* `prisma generate`
* `prisma db push`
* Schema Synchronization

---

### Module 6 — Prisma Client

* What is Prisma Client?
* Generating Prisma Client
* `PrismaClient` Class
* Creating a Prisma Client Instance
* Professional Project Structure
* Reusable Prisma Client Configuration
* Database Connection Flow
* Best Practices

---

### Module 7 — CRUD Operations (Part 1)

* CRUD Overview
* `create()`
* `findMany()`
* `findUnique()`
* SQL vs Prisma Queries
* Express Controller Integration
* Request Flow
* Route Parameters
* Using `Number(req.params.id)`
* Difference between `findMany()` and `findUnique()`

---

## 🛠️ Tech Stack

* Node.js
* Express.js
* Prisma ORM
* MySQL
* JavaScript (ES6+)

---

## 📂 Project Structure

```text
project/
│
├── prisma/
│   ├── migrations/
│   └── schema.prisma
│
├── src/
│   ├── config/
│   │   └── prisma.js
│   ├── controllers/
│   ├── routes/
│   ├── middleware/
│   ├── services/
│   └── app.js
│
├── .env
├── package.json
└── server.js
```

---

## 🎯 Learning Outcomes

After completing these modules, you will be able to:

* Understand how Prisma works internally.
* Configure Prisma with an Express.js application.
* Connect Prisma to a MySQL database.
* Design database schemas using Prisma models.
* Manage database changes with migrations.
* Use Prisma Client professionally in Express projects.
* Perform basic CRUD operations using Prisma.
* Understand the relationship between Prisma queries and SQL.

---

## 🚀 Upcoming Topics

* CRUD Operations (Part 2)
* Filtering
* Sorting
* Pagination
* Relationships (One-to-One, One-to-Many, Many-to-Many)
* `select` & `include`
* Aggregations
* Transactions
* Error Handling
* Seeding
* Best Practices
* Complete REST API Project

---

## 📌 Status

| Module                   | Status        |
| ------------------------ | ------------- |
| Prisma Fundamentals      | ✅ Completed   |
| Installation & Setup     | ✅ Completed   |
| Database Connection      | ✅ Completed   |
| Schema & Models          | ✅ Completed   |
| Migrations               | ✅ Completed   |
| Prisma Client            | ✅ Completed   |
| CRUD Operations (Part 1) | ✅ Completed   |
| Remaining Modules        | ⏳ In Progress |
