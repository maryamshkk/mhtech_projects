<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-600 shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">
                @yield('page-title', 'Laravel Authentication')
            </h1>

            @auth 
        <form action="/logout" method="POST">
                @csrf

            <button
                class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg">

                Logout

            </button>

        </form>
        @endauth 
        </div>
</nav>

    <!-- Flash Messages -->

    <div class="max-w-5xl mx-auto mt-8 px-4">

        @if(session('success'))

            <div class="bg-green-100 border border-green-400 text-green-700 p-4 rounded-lg mb-6">

                {{ session('success') }}

            </div>

        @endif

        @if(session('error'))

            <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded-lg mb-6">

                {{ session('error') }}

            </div>
        @endif

    </div>
    
    <div class="max-w-5xl mx-auto mt-8 px-4">

        @yield('content')

    </div>
</body>
</html>