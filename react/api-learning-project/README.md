# React + TanStack Query Learning

## 📌 Project

A React CRUD application connected with a Laravel REST API using TanStack Query.

## ✅ Topics Covered

### React Fundamentals

* Controlled Components
* Form State Management
* Dynamic Input Handling
* Form Submission (`preventDefault`)
* Passing Functions as Props
* Child → Parent Communication
* Lifting State Up
* Conditional Rendering
* `useEffect` Hook
* API Fetching using `fetch()`

### CRUD with React

* Create User
* Read Users
* Update User
* Delete User

### Laravel REST API

* GET `/api/users`
* POST `/api/users`
* PUT `/api/users/{id}`
* DELETE `/api/users/{id}`

### TanStack Query

* Installation & Setup
* `QueryClient`
* `QueryClientProvider`
* `useQuery`
* Query Keys
* Query Cache
* `staleTime`
* `gcTime`
* `refetchOnWindowFocus`
* `useMutation`
* POST Mutation
* PUT Mutation
* DELETE Mutation
* `invalidateQueries()`

## 📂 Project Structure

```text
src/
│
├── components/
│   ├── UserCard.jsx
│   └── UserForm.jsx
│
├── pages/
│   └── QueryUsers.jsx
│
├── services/
│   └── userService.js
│
└── main.jsx
```

## 🔄 Current Flow

```text
User Action
      ↓
React Component
      ↓
TanStack Query
      ↓
userService.js
      ↓
Laravel API
      ↓
Database
      ↓
Updated Cache
      ↓
Automatic UI Update
```

## 🎯 Goal

Build production-ready React applications using **TanStack Query** with a **Laravel REST API**, while understanding caching, mutations, and server-state management following professional development practices.
