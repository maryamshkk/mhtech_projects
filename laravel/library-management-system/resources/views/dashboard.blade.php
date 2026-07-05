<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-amber-50">

<div class="max-w-7xl mx-auto py-10 px-6">

    <!-- Header -->

    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">

        <h1 class="text-5xl font-bold text-amber-900">
            📚 Library Management System
        </h1>

        <p class="text-gray-600 mt-3 text-lg">
            Welcome to your Library Dashboard
        </p>

    </div>

    <!-- Statistics -->

    <div class="grid grid-cols-2 gap-6 mb-10">

        <div class="bg-white rounded-xl shadow p-6 text-center">

            <h2 class="text-4xl font-bold text-amber-800">
                {{ $categories->count() }}
            </h2>

            <p class="text-gray-600 mt-2">
                Total Categories
            </p>

        </div>

        <div class="bg-white rounded-xl shadow p-6 text-center">

            <h2 class="text-4xl font-bold text-green-700">
                {{ $books->count() }}
            </h2>

            <p class="text-gray-600 mt-2">
                Total Books
            </p>

        </div>

    </div>

    <!-- Management Cards -->

    <div class="grid grid-cols-2 gap-8">

        <!-- Categories -->

        <div class="bg-white rounded-xl shadow-lg p-8">

            <div class="text-6xl text-center">
                📂
            </div>

            <h2 class="text-3xl font-bold text-center text-amber-900 mt-4">
                Categories
            </h2>

            <p class="text-center text-gray-600 mt-3">
                Create, edit, view and delete
                book categories.
            </p>

            <div class="text-center mt-8">

                <a href="{{ route('categories.index') }}"
                   class="bg-amber-800 text-white px-6 py-3 rounded-lg hover:bg-amber-900">

                    Manage Categories

                </a>

            </div>

        </div>

        <!-- Books -->

        <div class="bg-white rounded-xl shadow-lg p-8">

            <div class="text-6xl text-center">
                📖
            </div>

            <h2 class="text-3xl font-bold text-center text-green-700 mt-4">
                Books
            </h2>

            <p class="text-center text-gray-600 mt-3">
                Add, edit, view and manage
                all books in the library.
            </p>

            <div class="text-center mt-8">

                <a href="{{ route('books.index') }}"
                   class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800">

                    Manage Books

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>