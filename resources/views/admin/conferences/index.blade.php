@extends('layouts.app')

@section('content')
<h1>{{ __('messages.conference_management') }}</h1>

<a href="{{ route('conferences.create') }}" class="btn btn-primary mb-3">{{ __('messages.create_conference') }}</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Location</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($conferences as $conference)
        <tr>
            <td>{{ $conference['id'] }}</td>
            <td>{{ $conference['name'] }}</td>
            <td>{{ $conference['date'] }}</td>
            <td>{{ $conference['location'] }}</td>
            <td>
                <a href="{{ route('conferences.edit', $conference['id']) }}" class="btn btn-warning">{{ __('messages.edit') }}</a>
                <form action="{{ route('conferences.destroy', $conference['id']) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('messages.delete') }}</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection