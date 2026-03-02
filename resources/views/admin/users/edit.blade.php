@extends('layouts.app')

@section('content')
<h1>Edit User</h1>

<form action="{{ route('users.update', $user['id']) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $user['name'] }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $user['email'] }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection