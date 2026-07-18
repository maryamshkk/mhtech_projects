@extends('layouts.admin')
@section('title', 'Manage Users')
@section('page-title', 'Manage Users')
@section('content')

<div class="max-w-7xl mx-auto mt-8 px-4">

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
    <form action="{{ route('admin.users.index') }}" method="GET" class="mb-6 flex gap-3">
        <input 
        type="text" 
        name="search" 
        placeholder="Search by name...."
        value="{{ request('search') }}"
        class="border rounded-lg px-4 py-2 w-72">
        <button
            class="bg-blue-600 text-white px-5 rounded-lg hover:bg-blue-700">

            Search

        </button>
    </form>
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
    
    <div class="mt-6">
        {{ $users->links() }}
    </div>

</div>
@endsection