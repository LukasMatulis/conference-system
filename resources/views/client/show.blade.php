@extends('layouts.app')

@section('content')
<h1>{{ $conference['name'] }}</h1>
<p>{{ $conference['description'] }}</p>
<p>Date: {{ $conference['date'] }}</p>
<p>Location: {{ $conference['location'] }}</p>
<a href="{{ url('client/conferences') }}">Back to List</a>
@endsection