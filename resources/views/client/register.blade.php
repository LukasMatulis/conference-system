@extends('layouts.app')

@section('content')
<h1>{{ __('messages.register_for_conference_demo') }}</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ url('/client/register') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>{{ __('messages.name') }}</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>{{ __('messages.email') }}</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">{{ __('messages.register') }}</button>
</form>
@endsection