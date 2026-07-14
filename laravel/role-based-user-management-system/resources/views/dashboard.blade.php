@extends('layouts.app')
@section('title','Dashboard')
@section('page-title','Dashboard')
@section('content')

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

                <a href="{{ route('profile.index') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition">
                    My Profile
                </a>

                <a href="/"
                    class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg transition">
                    Home
                </a>

            </div>

        </div>

    


@endsection