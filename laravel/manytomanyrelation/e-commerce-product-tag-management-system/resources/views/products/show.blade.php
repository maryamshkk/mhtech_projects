<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900 min-h-screen flex items-center justify-center py-10 px-5">

<div class="w-full max-w-4xl bg-slate-900 border border-blue-800 rounded-2xl shadow-2xl overflow-hidden">

    <!-- Header -->

    <div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 border-b border-blue-800 px-8 py-6">

        <h1 class="text-4xl font-bold text-white">
            📦 Product Details
        </h1>

        <p class="text-blue-200 mt-2">
            View complete information about this product.
        </p>

    </div>

    <!-- Product Information -->

    <div class="p-8">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Product ID -->

            <div class="bg-slate-800 border border-blue-800 rounded-xl p-5">

                <p class="text-blue-300 text-sm uppercase tracking-wide">
                    Product ID
                </p>

                <h2 class="text-2xl font-bold text-white mt-2">
                    #{{ $product->id }}
                </h2>

            </div>

            <!-- Product Name -->

            <div class="bg-slate-800 border border-blue-800 rounded-xl p-5">

                <p class="text-blue-300 text-sm uppercase tracking-wide">
                    Product Name
                </p>

                <h2 class="text-2xl font-bold text-white mt-2">
                    {{ $product->name }}
                </h2>

            </div>

            <!-- Price -->

            <div class="bg-slate-800 border border-blue-800 rounded-xl p-5">

                <p class="text-blue-300 text-sm uppercase tracking-wide">
                    Price
                </p>

                <h2 class="text-2xl font-bold text-green-400 mt-2">
                    Rs. {{ number_format($product->price) }}
                </h2>

            </div>

            <!-- Stock -->

            <div class="bg-slate-800 border border-blue-800 rounded-xl p-5">

                <p class="text-blue-300 text-sm uppercase tracking-wide">
                    Available Stock
                </p>

                <span class="inline-block mt-3 px-5 py-2 rounded-full bg-green-600 text-white font-semibold">
                    {{ $product->stock }} Items
                </span>

            </div>

        </div>

        <!-- Description -->

        <div class="mt-8 bg-slate-800 border border-blue-800 rounded-xl p-6">

            <p class="text-blue-300 text-sm uppercase tracking-wide mb-3">
                Description
            </p>

            <p class="text-gray-300 leading-8">
                {{ $product->description }}
            </p>

        </div>

        <!-- Buttons -->

        <div class="mt-8 flex justify-end gap-4">

            <a href="{{ route('products.edit', $product->id) }}"
               class="px-6 py-3 rounded-xl bg-yellow-500 hover:bg-yellow-600 text-white font-semibold transition duration-300 hover:scale-105 shadow-lg">

                ✏ Edit Product

            </a>

            <a href="{{ route('products.index') }}"
               class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-700 to-blue-500 hover:from-blue-600 hover:to-blue-400 text-white font-semibold transition duration-300 hover:scale-105 shadow-lg">

                ← Back to Products

            </a>

        </div>

    </div>

</div>

</body>
</html>