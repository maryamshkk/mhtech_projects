<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-slate-100 via-gray-100 to-slate-200 min-h-screen">

<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- Header -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8 mb-8">

        <div class="flex justify-between items-center">

            <div>

                <h1 class="text-4xl font-bold text-gray-800">
                    📦 Product Management
                </h1>

                <p class="text-gray-500 mt-2">
                    Manage products, update inventory and organize your catalog.
                </p>

            </div>

            <a href="{{ route('products.create') }}"
               class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700
               text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition duration-300 hover:scale-105">

                + Add Product

            </a>

        </div>

    </div>


    <!-- Table Card -->

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">

        <div class="px-6 py-5 border-b bg-gray-50">

            <h2 class="text-xl font-semibold text-gray-700">
                Product List
            </h2>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead>

                <tr class="bg-gradient-to-r from-gray-900 to-gray-700 text-white">

                    <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                        ID
                    </th>

                    <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                        Product
                    </th>

                    <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                        Description
                    </th>

                    <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                        Price
                    </th>
                    
                    <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                        Tags
                    </th>

                    <th class="px-6 py-4 text-center uppercase tracking-wider text-sm">
                        Stock
                    </th>

                    <th class="px-6 py-4 text-center uppercase tracking-wider text-sm">
                        Actions
                    </th>

                </tr>

                </thead>

                <tbody>

                @forelse($products as $product)

                <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition duration-300">

                    <td class="px-6 py-5 font-semibold text-gray-600">
                        #{{ $product->id }}
                    </td>

                    <td class="px-6 py-5">

                        <div class="font-bold text-gray-800">
                            {{ $product->name }}
                        </div>

                    </td>

                    <td class="px-6 py-5 text-gray-500">

                        {{ $product->description }}

                    </td>

                    <td class="px-6 py-5">

                        <span class="font-bold text-green-600 text-lg">

                            Rs {{ number_format($product->price) }}

                        </span>

                    </td>

                    <td class="px-6 py-5">

                @forelse($product->tags as $tag)

                    <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm mr-2 mb-2">

                        {{ $tag->name }}

                    </span>

                @empty

                    <span class="text-gray-400">

                        No Tags

                    </span>

                @endforelse

            </td>

                    <td class="px-6 py-5 text-center">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">

                            {{ $product->stock }}

                        </span>

                    </td>

                    <td class="px-6 py-5">

                        <div class="flex justify-center gap-3">

                            <!-- View -->

                            <a href="{{ route('products.show',$product->id) }}"
                               class="px-4 py-2 rounded-lg bg-emerald-500 hover:bg-emerald-600 text-white font-medium transition hover:scale-105 shadow">

                                👁 View

                            </a>

                            <!-- Edit -->

                            <a href="{{ route('products.edit',$product->id) }}"
                               class="px-4 py-2 rounded-lg bg-amber-500 hover:bg-amber-600 text-white font-medium transition hover:scale-105 shadow">

                                ✏ Edit

                            </a>

                            <!-- Delete -->

                            <form action="{{ route('products.destroy',$product->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this product?')">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-medium transition hover:scale-105 shadow">

                                    🗑 Delete

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="py-16 text-center">

                        <div class="text-6xl mb-4">
                            📦
                        </div>

                        <h2 class="text-2xl font-bold text-gray-700">

                            No Products Found

                        </h2>

                        <p class="text-gray-500 mt-2">

                            Start by adding your first product.

                        </p>

                    </td>

                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>