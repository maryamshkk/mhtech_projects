<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-red-600 shadow">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-5">

        <h1 class="text-2xl font-bold text-white">
            Admin Dashboard
        </h1>

        <form action="/logout" method="POST">
            @csrf

            <button
                class="bg-white text-red-600 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                Logout
            </button>

        </form>

    </div>
</nav>

<!-- Main Content -->
<div class="max-w-6xl mx-auto mt-10 px-4">

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-5">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-5">
            {{ session('error') }}
        </div>
    @endif

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

</body>
</html>