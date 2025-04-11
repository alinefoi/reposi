@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" class="form-control" required>
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
        <label>Password:</label>
        <input type="password" name="password" class="form-control" required>
        <button type="submit" class="btn btn-success mt-2">Create</button>
    </form>
</div>
@endsection
