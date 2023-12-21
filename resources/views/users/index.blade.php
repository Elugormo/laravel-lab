<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<a href="{{ url('/users/create') }}" class="mt-1 block px-2 py-1 text-black bg-amber-200 font-semibold rounded">Create User</a>
<h1 class="text-2xl font-bold mb-4 text-center">User List</h1>
<table class="w-full border">
    <thead>
    <tr>
        <th class="border px-4 py-2">ID</th>
        <th class="border px-4 py-2">Name</th>
        <th class="border px-4 py-2">Email</th>
        <th class="border px-4 py-2">Details</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td class="border px-4 py-2">{{ $user->id }}</td>
            <td class="border px-4 py-2">{{ $user->name }}</td>
            <td class="border px-4 py-2">   {{ $user->email }} </td>
            <td class="border px-4 py-2">
                <a href="{{ url('/users', $user->id) }}" class="text-blue-500">Details</a>
            </td>
            <td class="border px-4 py-2">
                <div class="container flex justify-between">
                <a href="{{ url('/users/' . $user->id . '/edit') }}" class="text-blue-200">Edit</a>
                <form method="POST" action="{{ url('/users', $user->id) }}" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 ml-2">Delete</button>
                </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mt-1 block px-2 py-1 text-black bg-amber-200 font-semibold rounded">Log out</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
</body>
</html>
