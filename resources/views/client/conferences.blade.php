@extends('layouts.app')

@section('content')
<h1>{{ __('messages.client_conferences') }}</h1>

<ul>
    @foreach($conferences as $conference)
        <li>
            <strong>{{ $conference['name'] }}</strong> - {{ $conference['date'] }}
            <a href="{{ url('client/conferences/' . $conference['id']) }}">{{ __('messages.view_details') }}</a>
        </li>
    @endforeach
</ul>
@endsection