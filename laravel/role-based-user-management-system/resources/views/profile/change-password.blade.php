@extends('layouts.app') 
@section('title','Change Password') 
@section('page-title','Change Password') 
@section('content')
<div class="flex justify-center mt-10">
    <div class="bg-white shadow-xl rounded-xl w-full max-w-lg p-8">

    <form action="profile.change-password" method="POST">

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
@endsection
