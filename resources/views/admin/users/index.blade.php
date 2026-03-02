@extends('layouts.app')

@section('content')
<h1>{{ __('messages.users') }}</h1>

<table class="table">
    <thead>
        <tr>
            <th>{{ __('messages.id') }}</th>
            <th>{{ __('messages.name') }}</th>
            <th>{{ __('messages.email') }}</th>
            <th>{{ __('messages.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>
                <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-warning">{{ __('messages.edit') }}</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection