@extends('layouts.admin')
@section('title', 'Edit User')
@section('page-title', 'Edit User')
@section('content')

<div class="max-w-xl mx-auto bg-white shadow rounded-xl p-8">

    <h1 class="text-3xl font-bold mb-8">
        Edit User
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

<form action="{{ route('admin.users.update', $user->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-4">

        <label>Name</label>

        <input
        type="text"
        name="name"
        value="{{ $user->name }}"
        class="w-full border rounded p-3">

    </div>

    <div class="mb-4">

        <label>New Password</label>

        <input
            type="password"
            name="password"
            class="w-full border rounded p-3">

        <small class="text-gray-500">
            Leave blank to keep current password.
        </small>

    </div>

    <div class="mb-6">

        <label>Confirm Password</label>

        <input
            type="password"
            name="password_confirmation"
            class="w-full border rounded p-3">

    </div>

    <div class="mb-6">

    <label>Role</label>

        <select
        name="role"
        class="w-full border rounded p-3">

        <option value="customer"
            {{ $user->role == 'customer' ? 'selected' : '' }}>

            Customer

        </option>

    <option value="admin"
    {{ $user->role == 'admin' ? 'selected' : '' }}>

    Admin

    </option>

    </select>

    </div>

    <button
    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded">

    Update User

    </button>

</form>

</div>
@endsection