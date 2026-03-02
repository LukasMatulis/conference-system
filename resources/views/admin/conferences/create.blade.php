@extends('layouts.app')

@section('content')
<h1>{{ __('messages.create_conference') }}</h1>

<form action="{{ route('conferences.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Location</label>
        <input type="text" name="location" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">{{ __('messages.create') }}</button>
</form>
@endsection