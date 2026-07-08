<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-amber-50">

<div class="max-w-6xl mx-auto mt-10 px-4">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-4xl font-bold text-amber-900">
                📚 Library Management System
            </h1>

            <p class="text-gray-600 text-lg">
                Book Dashboard
            </p>

        </div>

        <a href="{{ route('books.create') }}"
           class="bg-amber-800 text-white px-5 py-2 rounded hover:bg-amber-900">

            + Add Book

        </a>

    </div>

    <!-- Table -->

    <div class="bg-white rounded shadow">

        <table class="w-full">

            <thead class="bg-amber-800 text-white">

                <tr>

                    <th class="p-4">ID</th>

                    <th class="p-4">Title</th>

                    <th class="p-4">Author</th>

                    <th class="p-4">Category</th>

                    <th class="p-4">Actions</th>

                </tr>

            </thead>

            <tbody>

                @forelse($books as $book)

                <tr class="border-b hover:bg-amber-50">

                    <td class="p-4 text-center">
                        {{ $book->id }}
                    </td>

                    <td class="p-4 text-center">
                        {{ $book->title }}
                    </td>

                    <td class="p-4 text-center">
                        {{ $book->author }}
                    </td>

                    <td class="p-4 text-center">
                        {{ $book->category->name }}
                    </td>

                    <td class="p-4">

                        <div class="flex justify-center gap-2">

                            <a href="{{ route('books.show', $book->id) }}"
                               class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700">
                                View
                            </a>

                            <a href="{{ route('books.edit', $book->id) }}"
                               class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600">
                                Edit
                            </a>

                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700">

                                    Delete

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center p-5 text-gray-500">

                        No Books Found

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>