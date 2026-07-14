@extends('layouts.admin')
@section('title', 'Create User')
@section('page-title', 'Create User')
@section('content')

<body class="bg-gray-100">

<div class="max-w-xl mx-auto mt-12 bg-white shadow rounded-xl p-8">

    <h1 class="text-3xl font-bold mb-8">

    Create User

    </h1>

    @if($errors->any())

<div class="bg-red-100 text-red-700 p-4 rounded mb-5">

    <ul>

    @foreach($errors->all() as $error)

    <li>{{ $error }}</li>

    @endforeach

    </ul>

</div>

    @endif

    <form action="{{ route('admin.users.store') }}" method="POST">

        @csrf

        <div class="mb-4">

            <label>Name</label>

            <input
            type="text"
            name="name"
            class="w-full border rounded p-3">

        </div>

    <div class="mb-4">

        <label>Email</label>

        <input
        type="email"
        name="email"
        class="w-full border rounded p-3">

    </div>

    <div class="mb-4">

        <label>Password</label>

        <input
        type="password"
        name="password"
        class="w-full border rounded p-3">

    </div>

    <div class="mb-6">

        <label>Role</label>

        <select
        name="role"
        class="w-full border rounded p-3">

        <option value="customer">

            Customer

        </option>

        <option value="admin">

            Admin

        </option>

    </select>

    </div>

    <button
    class="bg-blue-600 text-white px-6 py-3 rounded">

    Create User

    </button>

    </form>

    </div>
@endsection