@extends('layouts.auth')
@section('title', 'Register')
@section('content')

    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8">

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-blue-700">
                Create Account 🚀
            </h1>

            <p class="text-gray-500 mt-2">
                Register to get started
            </p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-5">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form action="/register" method="POST">

            @csrf

            <!-- Name -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Full Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter your full name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Email -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Create a password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Register Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300">
                Create Account
            </button>

        </form>

        <!-- Login Link -->
        <div class="text-center mt-6">
            <p class="text-gray-600">
                Already have an account?

                <a href="/login"
                    class="text-blue-600 font-semibold hover:text-blue-800">
                    Login
                </a>
            </p>
        </div>

    </div>
@endsection