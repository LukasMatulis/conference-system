@extends('layouts.app')

@section('content')
<h1>Client Conferences</h1>
<p>Name: {{ $userName ?? 'Lukas Matulis' }}</p>
<p>Group: Client</p>
<button class="btn btn-primary">Test Button</button>
@endsection