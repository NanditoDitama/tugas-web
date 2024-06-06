@extends('layout')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <p>Welcome to the admin dashboard.</p>
        <a href="{{ route('barangs.index') }}" class="btn btn-primary">Manage Inventory</a>
    </div>
@endsection
