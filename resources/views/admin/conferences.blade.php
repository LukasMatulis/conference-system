@extends('layouts.app')

@section('content')
<h1>{{ __('messages.admin_panel') }}</h1>
<p>{{ __('messages.welcome_admin') }}</p>

<a href="{{ url('admin/users') }}" class="btn btn-primary">{{ __('messages.user_management') }}</a>
<a href="{{ url('admin/conferences') }}" class="btn btn-primary">{{ __('messages.conference_management') }}</a>
@endsection