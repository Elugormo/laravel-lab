<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
<div class="container">
    <h1>Edit User</h1>
    <form method="POST" action="{{ url('/users', $user->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <button type="submit">Save Changes</button>
    </form>
</div>
</body>
</html>
