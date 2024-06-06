@extends('layout')

@section('content')
    <div class="container">
        <h1>User Dashboard</h1>
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <a href="{{ route('barangs.index') }}" class="btn btn-primary">View Inventory</a>
    </div>
@endsection
