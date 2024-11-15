<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CollectionRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showLibrarians()
    {
        $librarians = User::where('role', 'librarian')->get();
        return view('admin.librarians', compact('librarians'));
    }

    public function addLibrarian(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $librarian = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => 'librarian',
        ]);
        
        return back()->with('success', 'Librarian added successfully.');
    }

    public function removeLibrarian($id)
    {
        User::where('id', $id)->where('role', 'librarian')->delete();
        return back()->with('success', 'Librarian removed successfully.');
    }

    public function collectionRequests()
    {
        $requests = CollectionRequest::where('status', 'pending')->get();
        return view('admin.collectionRequests', compact('requests')); 
    }

    public function approveCollection($id)
    {
        $request = CollectionRequest::findOrFail($id);
        $request->update(['status' => 'approved']);
        return back()->with('success', 'Collection request approved.');  
    }

    public function rejectCollection($id)
    {
        $request = CollectionRequest::findOrFail($id);
        $request->update(['status' => 'rejected']);
        return back()->with('success', 'Collection request rejected.');
    }
}
