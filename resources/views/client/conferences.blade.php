@extends('layouts.app')

@section('content')
<h1>Client Conferences</h1>

<ul>
    @foreach($conferences as $conference)
        <li>
            <strong>{{ $conference['name'] }}</strong> - {{ $conference['date'] }}
            <a href="{{ url('client/conferences/' . $conference['id']) }}">View</a>
        </li>
    @endforeach
</ul>
@endsection