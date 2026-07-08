<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-amber-50">

<div class="max-w-xl mx-auto mt-12">

    <div class="bg-white border rounded shadow p-6">

        <h1 class="text-3xl font-bold text-amber-900 mb-6">
            📚 Add New Category
        </h1>

        <form action="{{ route('categories.store') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label class="block font-semibold mb-2">
                    Category Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full border p-2 rounded"
                    placeholder="Enter Category Name">

            </div>

            <div class="flex gap-3">

                <button
                    type="submit"
                    class="bg-amber-800 text-white px-5 py-2 rounded hover:bg-amber-900">

                    Save Category

                </button>

                <a href="{{ route('categories.index') }}"
                   class="bg-gray-500 text-white px-5 py-2 rounded hover:bg-gray-600">

                    Back

                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>