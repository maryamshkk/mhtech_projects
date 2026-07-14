<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

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
<body class="bg-gray-100">



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


@yield('content')

</body>
</html>