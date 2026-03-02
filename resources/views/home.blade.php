@extends('layouts.app')

@section('content')
    <h1>Lukas Matulis</h1>
    <p>{{ __('messages.group') }}: PIT-23-NL</p>

    <a href="/client/conferences" class="btn btn-primary">{{ __('messages.client_conferences') }}</a>
    <a href="/employee/conferences" class="btn btn-success">{{ __('messages.employee_conferences') }}</a>
    <a href="/admin" class="btn btn-danger">{{ __('messages.admin_conferences') }}</a>
@endsection