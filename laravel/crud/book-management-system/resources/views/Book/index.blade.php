<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management System</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

    <div class="max-w-7xl mx-auto py-10 px-6">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-bold text-slate-800">
                    📚 Book Management System
                </h1>
                <p class="text-gray-500 mt-2">
                    Manage all your books from one place.
                </p>
            </div>

            <a href="{{ route('books.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-3 rounded-lg shadow">
                + Add New Book
            </a>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            <div class="px-6 py-4 border-b">
                <h2 class="text-xl font-semibold text-slate-700">
                    Books List
                </h2>
            </div>

            <table class="w-full">

                <thead class="bg-slate-800 text-white">

                    <tr>
                        <th class="px-5 py-4 text-left">ID</th>
                        <th class="px-5 py-4 text-left">Title</th>
                        <th class="px-5 py-4 text-left">Author</th>
                        <th class="px-5 py-4 text-left">Category</th>
                        <th class="px-5 py-4 text-left">ISBN</th>
                        <th class="px-5 py-4 text-left">Publisher</th>
                        <th class="px-5 py-4 text-left">Year</th>
                        <th class="px-5 py-4 text-left">Price</th>
                        <th class="px-5 py-4 text-left">Quantity</th>
                        <th class="px-5 py-4 text-center">Actions</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($books as $book)

                    <tr class="border-b hover:bg-slate-50 transition">

                        <td class="px-5 py-4">{{ $book->id }}</td>
                        <td class="px-5 py-4 font-medium">{{ $book->title }}</td>
                        <td class="px-5 py-4">{{ $book->author }}</td>
                        <td class="px-5 py-4">{{ $book->category }}</td>
                        <td class="px-5 py-4">{{ $book->isbn }}</td>
                        <td class="px-5 py-4">{{ $book->publisher }}</td>
                        <td class="px-5 py-4">{{ $book->publication_year }}</td>
                        <td class="px-5 py-4">Rs. {{ $book->price }}</td>
                        <td class="px-5 py-4">{{ $book->quantity }}</td>

                        <td class="px-5 py-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('books.show', $book->id) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm">
                                    View
                                </a>

                                <a href="{{ route('books.edit', $book->id) }}"
                                   class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-md text-sm">
                                    Edit
                                </a>

                                <form action="{{ route('books.destroy', $book->id) }}"
                                      method="POST"
                                      class="inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        onclick="return confirm('Delete this book?')"
                                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>