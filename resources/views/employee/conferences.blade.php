@extends('layouts.app')

@section('content')
<h1>{{ __('messages.employee_conferences') }}</h1>

<ul>
    @foreach($conferences as $conference)
        <li>
            {{ $conference['name'] }} - {{ $conference['date'] }}
            <a href="{{ url('employee/conferences/' . $conference['id']) }}" class="btn btn-primary">{{ __('messages.view_clients') }}</a>
        </li>
    @endforeach
</ul>
@endsection