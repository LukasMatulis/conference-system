@extends('layouts.app')

@section('content')
<h1>{{ $conference['name'] }}</h1>
<p>{{ $conference['description'] }}</p>
<p>Date: {{ $conference['date'] }}</p>
<p>Location: {{ $conference['location'] }}</p>
<a href="{{ url('client/conferences') }}" class="btn btn-secondary">{{ __('messages.back_to_list') }}</a>
@endsection