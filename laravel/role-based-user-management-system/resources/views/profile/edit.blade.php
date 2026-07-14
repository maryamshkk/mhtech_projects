@extends('layouts.app')
@section('title', 'Edit Profile')
@section('page-title', 'Edit Profile')
@section('content')

<div class="max-w-5xl mx-auto mt-8 px-4">
    <div class="bg-white rounded-2xl shadow-lg p-8">

    <form action="profile.update" method="POST">

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

</div>
@endsection