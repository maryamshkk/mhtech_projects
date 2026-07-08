<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="max-w-3xl mx-auto mt-10">

    <!-- Heading -->
    <div class="mb-6">
        <h1 class="text-4xl font-bold text-slate-800">
            ✏️ Edit Book
        </h1>
        <p class="text-gray-500 mt-2">
            Update the information of the selected book.
        </p>
    </div>

    <!-- Form Card -->
    <div class="bg-white shadow-lg rounded-xl p-8">

        <form action="{{ route('books.update', $book->id) }}" method="POST">

            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Title</label>
                <input type="text" name="title"
                    value="{{ $book->title }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Author -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Author</label>
                <input type="text" name="author"
                    value="{{ $book->author }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Category -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Category</label>
                <input type="text" name="category"
                    value="{{ $book->category }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- ISBN -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">ISBN</label>
                <input type="text" name="isbn"
                    value="{{ $book->isbn }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Publisher -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Publisher</label>
                <input type="text" name="publisher"
                    value="{{ $book->publisher }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Publication Year -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Publication Year</label>
                <input type="number" name="publication_year"
                    value="{{ $book->publication_year }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Price -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Price</label>
                <input type="number" step="0.01" name="price"
                    value="{{ $book->price }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Quantity -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">Quantity</label>
                <input type="number" name="quantity"
                    value="{{ $book->quantity }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block font-semibold mb-2">Description</label>
                <textarea name="description" rows="5"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ $book->description }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">

                <a href="{{ route('books.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">
                    Back
                </a>

                <button type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg">
                    Update Book
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>