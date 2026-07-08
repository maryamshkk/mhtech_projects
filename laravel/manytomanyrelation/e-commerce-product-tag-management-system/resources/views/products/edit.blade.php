<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white shadow-xl rounded-xl p-8">

        <!-- Heading -->

        <div class="flex justify-between items-center mb-8">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Edit Product
                </h1>

                <p class="text-gray-500 mt-2">
                    Update the product information.
                </p>
            </div>

            <a href="{{ route('products.index') }}"
               class="bg-gray-700 hover:bg-gray-800 text-white px-5 py-2 rounded-lg">
                Back
            </a>

        </div>

        <!-- Validation Errors -->

        @if($errors->any())

            <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded-lg mb-6">

                <ul class="list-disc pl-5">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <!-- Form -->

        <form action="{{ route('products.update', $product->id) }}" method="POST">

            @csrf
            @method('PUT')

            <!-- Product Name -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Product Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">

            </div>

            <!-- Description -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="4"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('description', $product->description) }}</textarea>

            </div>

            <!-- Price -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Price
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="price"
                    value="{{ old('price', $product->price) }}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">

            </div>

            <!-- Stock -->

            <div class="mb-6">

                <label class="block font-semibold mb-2">
                    Stock
                </label>

                <input
                    type="number"
                    name="stock"
                    value="{{ old('stock', $product->stock) }}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">

            </div>
            <!-- Tags -->

        <div class="mb-6">

            <label class="block font-semibold mb-3">
                Select Tags
            </label>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

                @foreach($tags as $tag)

                    <label class="flex items-center gap-3 bg-gray-100 border border-gray-300 rounded-xl px-4 py-3 hover:bg-blue-50">

                        <input
                            type="checkbox"
                            name="tag_ids[]"
                            value="{{ $tag->id }}"

                            {{ $product->tags->contains($tag->id) ? 'checked' : '' }}

                            class="w-5 h-5">

                        <span>

                            {{ $tag->name }}

                        </span>

                    </label>

                @endforeach

            </div>

        </div>

            <!-- Buttons -->

            <div class="flex gap-4">

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow">

                    Update Product

                </button>

                <a href="{{ route('products.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                    Cancel

                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>