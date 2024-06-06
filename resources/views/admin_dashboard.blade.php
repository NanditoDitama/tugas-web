@extends('layout')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Manage Inventory</a>
    </div>
@endsection
