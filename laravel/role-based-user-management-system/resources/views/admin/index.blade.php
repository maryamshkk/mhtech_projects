@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('page-title', 'Admin Dashboard')
@section('content')

    <!-- Welcome Card -->
    <div class="bg-white rounded-xl shadow-lg p-8">

        <h2 class="text-3xl font-bold text-gray-800 mb-2">
            Welcome Admin, {{ Auth::user()->name }} 👋
        </h2>

        <p class="text-gray-500 mb-8">
            You are logged in as an Administrator.
        </p>

        <!-- Stats -->
        <div class="grid md:grid-cols-2 gap-6 mb-8">

            <div class="bg-red-50 border border-red-200 rounded-lg p-6">
                <h3 class="text-sm font-semibold text-gray-500 uppercase">
                    Name
                </h3>

                <p class="text-xl font-bold text-red-600 mt-2">
                    {{ Auth::user()->name }}
                </p>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <h3 class="text-sm font-semibold text-gray-500 uppercase">
                    Email
                </h3>

                <p class="text-xl font-bold text-blue-600 mt-2">
                    {{ Auth::user()->email }}
                </p>
            </div>

        </div>

        <!-- Buttons -->
        <div class="flex flex-wrap gap-4">

            <a href="/admin/users"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                👥 Manage Users
            </a>

            <a href="/profile"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                👤 My Profile
            </a>

            <a href="/"
                class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg font-semibold transition">
                🏠 Home
            </a>

        </div>

    </div>

</div>
@endsection