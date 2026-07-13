<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-bold text-white">
            Manage Users
        </h1>

        <a href="{{ route('admin.dashboard') }}"
            class="bg-white text-blue-600 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100">
            Dashboard
        </a>

    </div>
</nav>

<div class="max-w-7xl mx-auto mt-8 px-4">

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-5 py-3 rounded-lg mb-5">
            {{ session('success') }}
        </div>
    @endif

    <!-- Top Buttons -->
    <div class="flex justify-between items-center mb-6">

        <h2 class="text-3xl font-bold text-gray-800">
            All Users
        </h2>

        <a href="{{ route('admin.users.create') }}"
            class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold transition">
            + Add User
        </a>

    </div>

    <!-- Table -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden">

        <table class="w-full table-auto text-left">

            <thead class="bg-blue-600 text-white">

                <tr>

                    <th class="px-6 py-4 text-center">ID</th>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4 text-center">Role</th>
                    <th class="px-6 py-4">Action</th> 
                </tr>

            </thead>

            <tbody>

                @forelse($users as $user)
                
                    <tr class="border-b hover:bg-gray-50">

                        <td class="px-6 py-4 text-center">
                            {{ $user->id }}
                        </td>

                        <td class="px-6 py-4 font-medium">
                            {{ $user->name }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>

                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center justify-center bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm font-semibold">
                                Customer
                            </span>
                    </td>


                    <td class="space-x-2">
                        <a href="{{ route('admin.users.edit', $user->id) }}"

                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">

                        Edit

                        </a>
                    

                        <form
                        action="{{ route('admin.users.destroy', $user->id) }}"
                        method="POST"
                        class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Are you sure you want to delete this user?')"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">

                            Delete

                            </button>

                        </form>
                    
                        </td>


                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="text-center py-6 text-gray-500">
                            No users found.
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>