<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-slate-100 via-gray-100 to-slate-200 min-h-screen flex items-center justify-center py-10">

<div class="w-full max-w-3xl bg-white rounded-2xl shadow-2xl overflow-hidden">

    <!-- Header -->

    <div class="bg-gradient-to-r from-blue-700 to-indigo-700 p-8 text-white">

        <h1 class="text-4xl font-bold">
            📦 Create Product
        </h1>

        <p class="mt-2 text-blue-100">
            Fill in the details below to add a new product.
        </p>

    </div>

    <!-- Form -->

    <form action="{{ route('products.store') }}" method="POST" class="p-8 space-y-6">

        @csrf

        <!-- Product Name -->

        <div>

            <label class="block text-gray-700 font-semibold mb-2">
                Product Name
            </label>

            <input
                type="text"
                name="name"
                placeholder="Enter product name"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">

        </div>

        <!-- Description -->

        <div>

            <label class="block text-gray-700 font-semibold mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="5"
                placeholder="Write product description..."
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>

        </div>

        <!-- Price & Stock -->

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>

                <label class="block text-gray-700 font-semibold mb-2">
                    Price (Rs)
                </label>

                <input
                    type="number"
                    name="price"
                    placeholder="0"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">

            </div>

            <div>

                <label class="block text-gray-700 font-semibold mb-2">
                    Stock Quantity
                </label>

                <input
                    type="number"
                    name="stock"
                    placeholder="0"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">

            </div>
            

        </div>

        <!-- Tags -->

        <div>

            <label class="block text-gray-700 font-semibold mb-3">
                Select Tags
            </label>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

                @foreach($tags as $tag)

                    <label class="flex items-center gap-3 bg-gray-100 border border-gray-300 rounded-xl px-4 py-3 cursor-pointer hover:bg-blue-50 hover:border-blue-500 transition">

                        <input
                            type="checkbox"
                            name="tag_ids[]"
                            value="{{ $tag->id }}"
                            class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500">

                        <span class="font-medium text-gray-700">
                            {{ $tag->name }}
                        </span>

                    </label>

                @endforeach

            </div>

        </div>

        <!-- Buttons -->

        <div class="flex justify-end gap-4 pt-4">

            <a href="{{ route('products.index') }}"
               class="px-6 py-3 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-100 transition">

                Cancel

            </a>

            <button
                type="submit"
                class="px-8 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold shadow-lg hover:from-blue-700 hover:to-indigo-700 transition duration-300 hover:scale-105">

                💾 Save Product

            </button>

        </div>

    </form>

</div>

</body>
</html>