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
    <h1 class="text-2xl font-bold mb-4">User Details</h1>
    <div class="mb-4">
        <p class="text-gray-600 text-sm font-semibold"><strong>Name:</strong> {{ $user->name }}</p>
    </div>
    <div class="mb-4">
        <p class="text-gray-600 text-sm font-semibold"><strong>Email:</strong> {{ $user->email }}</p>
    </div>
        <div class="mb-4">
            <p class="text-gray-600 text-sm font-semibold"><strong>Password:</strong> {{ $user->password }}</p>
        </div>
</div>
</body>
</html>
