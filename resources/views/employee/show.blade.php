@extends('layouts.app')

@section('content')
<h1>{{ $conference['name'] }}</h1>
<p>{{ $conference['description'] }}</p>
<p>Date: {{ $conference['date'] }}</p>
<p>Location: {{ $conference['location'] }}</p>

<h3>Registered Clients:</h3>
<ul>
    @foreach($conference['clients'] as $client)
        <li>{{ $client }}</li>
    @endforeach
</ul>

<a href="{{ url('employee/conferences') }}">Back to List</a>
@endsection