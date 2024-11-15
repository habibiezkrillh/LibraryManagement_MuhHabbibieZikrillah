@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Inventory</h1>
    <form action="{{ route('librarian.updateInventory') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <button type="submit">Add Book</button>
    </form>

    <h2>Existing Books</h2>
    <ul>
        @foreach ($books as $book)
        <li>{{ $book->title }} by {{ $book->author }} ({{ $book->quantity }} copies)</li>
        @endforeach
    </ul>
</div>
@endsection
