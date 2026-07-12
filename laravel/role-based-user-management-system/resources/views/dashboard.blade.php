<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    
    <!-- Navbar -->
    <nav class="bg-blue-600 shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-white">
                Laravel Authentication
            </h1>

            <form action="/logout" method="POST">
                @csrf
                <button
                    type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg transition duration-300">
                    Logout
                </button>
            </form>

        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-5xl mx-auto mt-10 px-4">
        @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
@endif

        <!-- Welcome Card -->
        <div class="bg-white rounded-xl shadow-lg p-8">

            <h2 class="text-3xl font-bold text-gray-800 mb-2">
                Welcome, {{ Auth::user()->name }} 👋
            </h2>

            <p class="text-gray-500 mb-8">
                You have successfully logged into your account.
            </p>

            <div class="grid md:grid-cols-2 gap-6">

                <!-- Name Card -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-5">
                    <h3 class="text-sm font-semibold text-gray-500 uppercase">
                        Name
                    </h3>

                    <p class="text-xl font-bold text-blue-700 mt-2">
                        {{ Auth::user()->name }}
                    </p>
                </div>

                <!-- Email Card -->
                <div class="bg-green-50 border border-green-200 rounded-lg p-5">
                    <h3 class="text-sm font-semibold text-gray-500 uppercase">
                        Email
                    </h3>

                    <p class="text-xl font-bold text-green-700 mt-2">
                        {{ Auth::user()->email }}
                    </p>
                </div>

            </div>

            <!-- Buttons -->
            <div class="mt-8 flex gap-4">

                <a href="/profile"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition">
                    My Profile
                </a>

                <a href="/"
                    class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg transition">
                    Home
                </a>

            </div>

        </div>

    </div>

</body>
</html>