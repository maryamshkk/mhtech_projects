<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-amber-50">

<div class="max-w-2xl mx-auto mt-10">

    <!-- Heading -->
    <div class="mb-6">

        <h1 class="text-4xl font-bold text-amber-900">
            📚 Library Management System
        </h1>

        <p class="text-gray-600 text-lg">
            Add New Book
        </p>

    </div>

    <!-- Form Card -->
    <div class="bg-white p-6 rounded-lg shadow">

        <form action="{{ route('books.store') }}" method="POST">

            @csrf

            <!-- Book Title -->
            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Book Title
                </label>

                <input type="text" name="title" placeholder="Enter Book Title"
                    class="w-full border p-3 rounded">

            </div>

            <!-- Author -->
            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Author
                </label>

                <input type="text" name="author" placeholder="Enter Author Name"
                class="w-full border p-3 rounded">

            </div>

            <!-- Category -->
            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Category
                </label>

                <select name="category_id" class="w-full border p-3 rounded">
                    <option value="">Select Category</option>

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>

                    @endforeach

                </select>

            </div>

            <!-- Buttons -->
            <div class="flex gap-3">

                <button type="submit"
                    class="bg-amber-800 text-white px-5 py-2 rounded hover:bg-amber-900">
                    Save Book
                </button>

                <a href="{{ route('books.index') }}"
                   class="bg-gray-600 text-white px-5 py-2 rounded hover:bg-gray-700">
                    Back

                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>