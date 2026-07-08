<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-amber-50">

<div class="max-w-2xl mx-auto mt-10">

    <div class="bg-white p-8 rounded shadow">

        <h1 class="text-3xl font-bold text-amber-900 mb-6">
            📖 View Book
        </h1>

        <div class="mb-4">
            <strong>Book ID:</strong>
            {{ $book->id }}
        </div>

        <div class="mb-4">
            <strong>Book Title:</strong>
            {{ $book->title }}
        </div>

        <div class="mb-4">
            <strong>Author:</strong>
            {{ $book->author }}
        </div>

        <div class="mb-6">
            <strong>Category:</strong>
            {{ $book->category->name }}
        </div>

        <a href="{{ route('books.index') }}"
           class="bg-amber-800 text-white px-5 py-2 rounded hover:bg-amber-900">

            Back

        </a>

    </div>

</div>

</body>
</html>