@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Librarians</h1>
    <form action="{{ route('admin.addLibrarian') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Add Librarian</button>
    </form>

    <h2>Existing Librarians</h2>
    <ul>
        @foreach ($librarians as $librarian)
        <li>
            {{ $librarian->name }} ({{ $librarian->email }})
            <form action="{{ route('admin.removeLibrarian', $librarian->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Remove</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
