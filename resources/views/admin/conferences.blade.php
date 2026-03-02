@extends('layouts.app')

@section('content')
<h1>Admin Conferences</h1>
<p>Name: {{ $userName ?? 'Lukas Matulis' }}</p>
<p>Group: Admin</p>
<button class="btn btn-secondary">Test Button</button>
@endsection