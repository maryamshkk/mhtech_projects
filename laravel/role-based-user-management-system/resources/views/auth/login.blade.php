<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 via-sky-100 to-indigo-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8">

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-blue-700">
                Welcome Back 👋
            </h1>

            <p class="text-gray-500 mt-2">
                Login to your account
            </p>
        </div>

        <!-- Error Message -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-5">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Login Form -->
        <form action="/login" method="POST">

            @csrf

            <!-- Email -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300">
                Login
            </button>

        </form>

        <!-- Register Link -->
        <div class="text-center mt-6">
            <p class="text-gray-600">
                Don't have an account?

                <a href="/register"
                    class="text-blue-600 font-semibold hover:text-blue-800">
                    Register
                </a>
            </p>
        </div>

    </div>

</body>
</html>