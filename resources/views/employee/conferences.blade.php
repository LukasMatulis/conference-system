@extends('layouts.app')

@section('content')
<h1>Employee Conferences</h1>

<ul>
    @foreach($conferences as $conference)
        <li>
            {{ $conference['name'] }} - {{ $conference['date'] }}
            <a href="{{ url('employee/conferences/' . $conference['id']) }}">View Clients</a>
        </li>
    @endforeach
</ul>
@endsection