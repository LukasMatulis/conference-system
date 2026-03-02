@extends('layouts.app')

@section('content')
<h1>Employee Conferences</h1>
<p>Name: {{ $userName ?? 'Lukas Matulis' }}</p>
<p>Group: Employee</p>
<button class="btn btn-secondary">Test Button</button>
@endsection