<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Category</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-amber-50">

<div class="max-w-xl mx-auto mt-10">

    <div class="bg-white p-6 rounded shadow">

        <h1 class="text-3xl font-bold text-amber-900 mb-6">
            View Category
        </h1>

        <p class="mb-4">
            <strong>ID:</strong>
            {{ $category->id }}
        </p>

        <p class="mb-6">
            <strong>Category Name:</strong>
            {{ $category->name }}
        </p>

        <a href="{{ route('categories.index') }}"
           class="bg-amber-800 text-white px-4 py-2 rounded hover:bg-amber-900">
            Back
        </a>

    </div>

</div>

</body>
</html>