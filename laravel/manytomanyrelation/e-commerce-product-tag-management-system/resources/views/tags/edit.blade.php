<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tag</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto mt-12">

    <div class="bg-white rounded-xl shadow-lg p-8">

        <!-- Heading -->
        <div class="mb-8">

            <h1 class="text-3xl font-bold text-gray-800">
                ✏ Edit Tag
            </h1>

            <p class="text-gray-500 mt-2">
                Update the selected tag details.
            </p>

        </div>

        <!-- Validation Errors -->
        @if($errors->any())

            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">

                <ul class="list-disc list-inside">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <!-- Form -->
        <form action="{{ route('tags.update', $tag->id) }}" method="POST">

            @csrf
            @method('PUT')

            <!-- Tag Name -->
            <div class="mb-6">

                <label class="block mb-2 font-semibold text-gray-700">
                    Tag Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $tag->name) }}"
                    placeholder="Enter Tag Name"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                >

            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center">

                <a href="{{ route('tags.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg transition">
                    ← Back
                </a>

                <button
                    type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg transition">
                    ✏ Update Tag
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>