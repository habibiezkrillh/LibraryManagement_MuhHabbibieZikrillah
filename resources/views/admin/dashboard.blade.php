@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="{{ route('admin.librarians') }}">Manage Librarians</a></li>
        <li><a href="{{ route('admin.collectionRequests') }}">Collection Requests</a></li>
    </ul>
</div>
@endsection
