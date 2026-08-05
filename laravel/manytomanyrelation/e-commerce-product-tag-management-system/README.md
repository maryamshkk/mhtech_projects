# 🛒 Product & Tag Management System

A Laravel-based application developed to learn and implement **CRUD operations** and **Many-to-Many Relationships** using the MVC architecture and Eloquent ORM.

---

## 🚀 Tech Stack

| Technology   | Usage                |
| ------------ | -------------------- |
| Laravel      | Backend Framework    |
| PHP          | Server-side Language |
| MySQL        | Database             |
| Blade        | Templating Engine    |
| Tailwind CSS | User Interface       |
| Eloquent ORM | Database Operations  |

---

## 📌 Completed Features

### ✅ Product Module

* Complete Product CRUD
* Create Product
* View All Products
* View Product Details
* Edit Product
* Delete Product
* Form Validation
* Route Model Binding
* Flash Success Messages

---

### ✅ Database Design

| Table                     | Status       |
| ------------------------- | ------------ |
| Products                  | ✔️ Completed |
| Tags                      | ✔️ Completed |
| Product_Tag (Pivot Table) | ✔️ Completed |

Implemented:

* Foreign Key Constraints
* Cascade Delete
* Composite Primary Key
* Many-to-Many Database Structure

---

### ✅ Eloquent Models

| Model   | Relationship                    |
| ------- | ------------------------------- |
| Product | `belongsToMany(Tag::class)`     |
| Tag     | `belongsToMany(Product::class)` |

Also implemented:

* Mass Assignment (`$fillable`)
* Eloquent ORM

---

### ✅ Routing

* Manual CRUD Routes
* Named Routes
* RESTful Route Structure

---

### ✅ Blade Views

| View            | Status |
| --------------- | ------ |
| Product Listing | ✔️     |
| Create Product  | ✔️     |
| Edit Product    | ✔️     |
| Product Details | ✔️     |

---

## 📚 Laravel Concepts Practiced

* MVC Architecture
* CRUD Operations
* Routing
* Controllers
* Eloquent ORM
* Blade Templates
* Form Validation
* Route Model Binding
* Many-to-Many Relationships
* Pivot Tables
* Foreign Keys
* Cascade Delete
* Mass Assignment

---

## 🎯 Project Status

✅ Product CRUD completed

✅ Database structure for Many-to-Many relationship completed

✅ Eloquent relationships configured

---

## 📷 Current Application

* Professional Product Management Interface
* Responsive Product Listing
* Product Create Form
* Product Edit Form
* Product Details Page
* Delete Confirmation
