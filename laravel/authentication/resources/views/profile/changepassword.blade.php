<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-xl w-full max-w-lg p-8">

    <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">
        Change Password
    </h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 rounded-lg p-4 mb-5">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/profile/changepassword" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-5">

            <label class="font-semibold">
                Current Password
            </label>

            <input
                type="password"
                name="current_password"
                class="w-full border rounded-lg px-4 py-3 mt-2">

        </div>

        <div class="mb-5">

            <label class="font-semibold">
                New Password
            </label>

            <input
                type="password"
                name="password"
                class="w-full border rounded-lg px-4 py-3 mt-2">

        </div>

        <div class="mb-6">

            <label class="font-semibold">
                Confirm Password
            </label>

            <input
                type="password"
                name="password_confirmation"
                class="w-full border rounded-lg px-4 py-3 mt-2">

        </div>

        <button
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg">

            Update Password

        </button>

    </form>

    <div class="text-center mt-5">

        <a href="/profile"
           class="text-blue-600 hover:underline">

            Back to Profile

        </a>

    </div>

</div>

</body>
</html>