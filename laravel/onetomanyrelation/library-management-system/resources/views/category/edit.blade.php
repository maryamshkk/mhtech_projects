<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-amber-50">

<div class="max-w-xl mx-auto mt-10">

    <div class="bg-white p-6 rounded shadow">

        <h1 class="text-3xl font-bold text-amber-900 mb-6">
            Edit Category
        </h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Category Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ $category->name }}"
                    class="w-full border p-2 rounded">

            </div>

            <button
                type="submit"
                class="bg-amber-800 text-white px-4 py-2 rounded hover:bg-amber-900">
                Update
            </button>

            <a href="{{ route('categories.index') }}"
               class="bg-gray-600 text-white px-4 py-2 rounded ml-2">
                Back
            </a>

        </form>

    </div>

</div>

</body>
</html>