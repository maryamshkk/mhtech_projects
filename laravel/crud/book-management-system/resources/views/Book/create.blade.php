<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter New Book</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="max-w-3xl mx-auto mt-10">

    <!-- Heading -->
    <div class="mb-6">
        <h1 class="text-4xl font-bold text-slate-800">
            📚 Add New Book
        </h1>
        <p class="text-gray-500 mt-2">
            Enter the details below to add a new book.
        </p>
    </div>

    <!-- Form Card -->
    <div class="bg-white shadow-lg rounded-xl p-8">

        <form action="{{ route('books.store') }}" method="POST">

            @csrf

            <!-- Book Title -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Book Title</label>
                <input
                    type="text"
                    name="title"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Author -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Author</label>
                <input
                    type="text"
                    name="author"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Category -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Category</label>
                <input
                    type="text"
                    name="category"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- ISBN -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">ISBN</label>
                <input
                    type="text"
                    name="isbn"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Publisher -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Publisher</label>
                <input
                    type="text"
                    name="publisher"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Publication Year -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Publication Year</label>
                <input
                    type="number"
                    name="publication_year"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Price -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Price</label>
                <input
                    type="number"
                    step="0.01"
                    name="price"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Quantity -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Quantity</label>
                <input
                    type="number"
                    name="quantity"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <!-- Description -->
            <div class="mb-6">
                <label class="block font-semibold mb-2">Description</label>
                <textarea
                    name="description"
                    rows="5"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">

                <a href="{{ route('books.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg transition">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg transition">
                    Save Book
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>