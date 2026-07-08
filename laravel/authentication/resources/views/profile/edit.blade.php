<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<div class="max-w-2xl mx-auto mt-12 bg-white shadow-lg rounded-xl p-8">

    <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">
        Edit Profile
    </h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 rounded-lg p-4 mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/profile/update" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-5">

            <label class="block font-semibold mb-2">
                Name
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name', Auth::user()->name) }}"
                class="w-full border rounded-lg px-4 py-3">

        </div>

        <div class="mb-5">

            <label class="block font-semibold mb-2">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email', Auth::user()->email) }}"
                class="w-full border rounded-lg px-4 py-3">

        </div>

        <div class="flex gap-4 mt-6">

            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">

                Update Profile

            </button>

            <a
                href="/profile"
                class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg">

                Cancel

            </a>

        </div>

    </form>

</div>

</body>
</html>