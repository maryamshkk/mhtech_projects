<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags Management</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-7xl mx-auto mt-10">

    <div class="bg-white rounded-xl shadow-lg p-8">

        <!-- Heading -->
        <div class="flex justify-between items-center mb-8">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    🏷 Tags Management
                </h1>

                <p class="text-gray-500 mt-2">
                    Manage all available product tags.
                </p>
            </div>

            <a href="{{ route('tags.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold transition">
                + Add Tag
            </a>

        </div>

        <!-- Success Message -->
        @if(session('success'))

            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>

        @endif

        <!-- Table -->

        <div class="overflow-x-auto">

            <table class="w-full border border-gray-300">

                <thead class="bg-gray-800 text-white">

                <tr>

                    <th class="p-4 text-left">ID</th>

                    <th class="p-4 text-left">Tag Name</th>

                    <th class="p-4 text-center">Actions</th>

                </tr>

                </thead>

                <tbody>

                @forelse($tags as $tag)

                    <tr class="border-b hover:bg-gray-50">

                        <td class="p-4">{{ $tag->id }}</td>

                        <td class="p-4">
                            {{ $tag->name }}
                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-3">

                                <a href="{{ route('tags.edit',$tag->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">
                                    ✏ Edit
                                </a>

                                <form action="{{ route('tags.destroy',$tag->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this tag?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                                        🗑 Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="3"
                            class="text-center py-8 text-gray-500">

                            No Tags Found.

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