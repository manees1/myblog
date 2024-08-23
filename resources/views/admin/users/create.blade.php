<!-- resources/views/admin/users/create.blade.php -->
@extends('admin.layout')

@section('content')
    <h1>Create New User</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="form-control" required>
                <option value="admin">Admin</option>
                <option value="author">Author</option>
                <option value="user">User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
@endsection
