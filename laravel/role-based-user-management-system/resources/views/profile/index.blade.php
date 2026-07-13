<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-600 shadow">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-white">
                My Profile
            </h1>

            <a href="{{ route('profile.index') }}"
                class="bg-white text-blue-600 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100">
                Dashboard
            </a>

        </div>
    </nav>

    <div class="max-w-3xl mx-auto mt-10">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <!-- Avatar -->
            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 rounded-full bg-blue-600 flex items-center justify-center text-white text-4xl font-bold">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </div>

            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
                {{ Auth::user()->name }}
            </h2>

            <div class="space-y-5">

                <div>
                    <label class="text-gray-500 font-semibold">
                        Full Name
                    </label>

                    <div class="mt-2 p-4 bg-gray-100 rounded-lg">
                        {{ Auth::user()->name }}
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 font-semibold">
                        Email Address
                    </label>

                    <div class="mt-2 p-4 bg-gray-100 rounded-lg">
                        {{ Auth::user()->email }}
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 font-semibold">
                        Member Since
                    </label>

                    <div class="mt-2 p-4 bg-gray-100 rounded-lg">
                        {{ Auth::user()->created_at->format('d M Y') }}
                    </div>
                </div>

            </div>

            <div class="mt-8 flex gap-4">

                <a href="/dashboard"
                    class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg">
                    Back
                </a>

                <a href="{{ route('profile.edit') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
                    Edit Profile
                </a>
                <a href="{{ route('profile.change-password') }}"
                class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg">
                    Change Password
                </a>

            </div>

        </div>

    </div>

</body>
</html>