@extends('layouts.app')

@section('content')
<h1>{{ __('messages.edit_user') }}</h1>

<form action="{{ route('users.update', $user['id']) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="name">{{ __('messages.name') }}</label>
        <input type="text" name="name" value="{{ $user['name'] }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email">{{ __('messages.email') }}</label>
        <input type="email" name="email" value="{{ $user['email'] }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">{{ __('messages.update') }}</button>
</form>
@endsection