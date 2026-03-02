@extends('layouts.app')

@section('content')
<h1>{{ __('messages.edit_conference') }}</h1>

<form action="{{ route('conferences.update', $conference['id']) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $conference['name'] }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ $conference['description'] }}</textarea>
    </div>

    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="date" value="{{ $conference['date'] }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Location</label>
        <input type="text" name="location" value="{{ $conference['location'] }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">{{ __('messages.update') }}</button>
</form>
@endsection