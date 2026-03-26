@extends('layouts.app')

@section('content')
<h1>{{ $conference['name'] }}</h1>
<p>{{ $conference['description'] }}</p>
<p>{{ __('messages.date') }}: {{ $conference['date'] }}</p>
<p>{{ __('messages.location') }}: {{ $conference['location'] }}</p>

<h3>{{ __('messages.registered_clients') }}:</h3>
<ul>
    @foreach($conference['clients'] as $client)
        <li>{{ $client }}</li>
    @endforeach
</ul>

<a href="{{ url('employee/conferences') }}" class="btn btn-secondary">{{ __('messages.back_to_list') }}</a>
@endsection