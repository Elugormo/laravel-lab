<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
<h1>User List</h1>
<a href="{{ url('/users/create') }}" class="btn btn-primary">Create User</a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Details</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>   {{ $user->email }} </td>
            <td>
                <a href="{{ url('/users', $user->id) }}">Details</a>
            </td>
            <td>
                <a href="{{ url('/users/' . $user->id . '/edit') }}">Edit</a>
                <form method="POST" action="{{ url('/users', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
