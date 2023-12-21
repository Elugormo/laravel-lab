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
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Create New User</h1>
    <form method="POST" action="/users" class="w-full max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-3 py-2 border rounded">
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message  }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-3 py-2 border rounded">
            @error('email')
              <p class="text-red-500 text-xs italic">{{ $message  }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
            <input type="password" id="password" name="password" required class="w-full px-3 py-2 border rounded">
            @error('password')
            <p class="text-red-500 text-xs italic">{{ $message  }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded">Create User</button>
    </form>
</div>
</body>
</html>
