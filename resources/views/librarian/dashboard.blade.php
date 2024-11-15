@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Librarian Dashboard</h1>
    <ul>
        <li><a href="{{ route('librarian.inventory') }}">Manage Inventory</a></li>
    </ul>
</div>
@endsection
