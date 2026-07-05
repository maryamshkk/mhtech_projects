<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<div class="max-w-3xl mx-auto mt-10">

    <!-- Heading -->
    <div class="mb-6">
        <h1 class="text-4xl font-bold text-slate-800">
            📖 Book Details
        </h1>
        <p class="text-gray-500 mt-2">
            View complete information about the selected book.
        </p>
    </div>

    <!-- Book Details Card -->
    <div class="bg-white rounded-xl shadow-lg p-8">

        <div class="grid grid-cols-2 gap-y-5">

            <div>
                <h3 class="font-semibold text-gray-600">Title</h3>
                <p>{{ $book->title }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-600">Author</h3>
                <p>{{ $book->author }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-600">Category</h3>
                <p>{{ $book->category }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-600">ISBN</h3>
                <p>{{ $book->isbn }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-600">Publisher</h3>
                <p>{{ $book->publisher }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-600">Publication Year</h3>
                <p>{{ $book->publication_year }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-600">Price</h3>
                <p>Rs. {{ $book->price }}</p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-600">Quantity</h3>
                <p>{{ $book->quantity }}</p>
            </div>

            <div class="col-span-2">
                <h3 class="font-semibold text-gray-600">Description</h3>
                <p>{{ $book->description }}</p>
            </div>

        </div>

        <!-- Buttons -->
        <div class="mt-8 flex justify-end gap-3">

            <a href="{{ route('books.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">
                Back
            </a>

            <a href="{{ route('books.edit', $book->id) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg">
                Edit
            </a>

        </div>

    </div>

</div>

</body>
</html>