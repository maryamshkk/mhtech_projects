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
                Category Dashboard
            </p>
        </div>

        <a href="{{ route('categories.create') }}"
           class="bg-amber-800 text-white px-5 py-2 rounded-lg hover:bg-amber-900 transition">
            + Add Category
        </a>

    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">

        <table class="w-full table-auto">

            <thead class="bg-amber-800 text-white">
                <tr>
                    <th class="py-4 px-4 text-center">ID</th>
                    <th class="py-4 px-4 text-center">Category Name</th>
                    <th class="py-4 px-4 text-center">Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse($categories as $category)

                <tr class="border-b hover:bg-amber-50">

                    <td class="py-4 px-4 text-center">
                        {{ $category->id }}
                    </td>

                    <td class="py-4 px-4 text-center">
                        {{ $category->name }}
                    </td>

                    <td class="py-4 px-4">

                        <div class="flex justify-center items-center gap-3">

                            <a href="{{ route('categories.show', $category->id) }}"
                               class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                                View
                            </a>

                            <a href="{{ route('categories.edit', $category->id) }}"
                               class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                                Edit
                            </a>

                            <form action="{{ route('categories.destroy', $category->id) }}"
                                    method="POST"
                                    class="inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 cursor-pointer transition">

                                        Delete

                                    </button>

                                </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="3" class="py-6 text-center text-gray-500">
                        No Categories Found
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>