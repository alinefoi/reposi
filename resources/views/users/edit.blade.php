@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        <label>Email:</label>
        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
