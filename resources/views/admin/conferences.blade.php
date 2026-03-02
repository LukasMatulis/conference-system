@extends('layouts.app')

@section('content')
<h1>Admin Panel</h1>
<p>Welcome, Admin</p>

<a href="{{ url('admin/users') }}" class="btn btn-primary">User Management</a>
<a href="{{ url('admin/conferences') }}" class="btn btn-primary">Conference Management</a>
@endsection