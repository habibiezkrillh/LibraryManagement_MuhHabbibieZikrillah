<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LibrarianController;
use Illuminate\Support\Facades\Route;

// Admin Routes (without authentication)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/librarians', [AdminController::class, 'showLibrarians'])->name('admin.librarians');
Route::post('/admin/librarians', [AdminController::class, 'addLibrarian'])->name('admin.addLibrarian');
Route::delete('/admin/librarians/{id}', [AdminController::class, 'removeLibrarian'])->name('admin.removeLibrarian');
Route::get('/admin/collection-requests', [AdminController::class, 'collectionRequests'])->name('admin.collectionRequests');
Route::post('/admin/collection-requests/{id}/approve', [AdminController::class, 'approveCollection'])->name('admin.approveCollection');
Route::post('/admin/collection-requests/{id}/reject', [AdminController::class, 'rejectCollection'])->name('admin.rejectCollection');

// Librarian Routes (without authentication)
Route::get('/librarian', [LibrarianController::class, 'index'])->name('librarian.dashboard');
Route::get('/librarian/inventory', [LibrarianController::class, 'inventory'])->name('librarian.inventory');
Route::post('/librarian/inventory', [LibrarianController::class, 'updateInventory'])->name('librarian.updateInventory');

// Admin Routes (without middleware)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/librarians', [AdminController::class, 'showLibrarians'])->name('admin.librarians');
Route::post('/admin/librarians', [AdminController::class, 'addLibrarian'])->name('admin.addLibrarian');
Route::delete('/admin/librarians/{id}', [AdminController::class, 'removeLibrarian'])->name('admin.removeLibrarian');
Route::get('/admin/collection-requests', [AdminController::class, 'collectionRequests'])->name('admin.collectionRequests');
Route::post('/admin/collection-requests/{id}/approve', [AdminController::class, 'approveCollection'])->name('admin.approveCollection');
Route::post('/admin/collection-requests/{id}/reject', [AdminController::class, 'rejectCollection'])->name('admin.rejectCollection');


// Librarian Routes (without middleware)
Route::get('/librarian', [LibrarianController::class, 'index'])->name('librarian.dashboard');
Route::get('/librarian/inventory', [LibrarianController::class, 'inventory'])->name('librarian.inventory');
Route::post('/librarian/inventory', [LibrarianController::class, 'updateInventory'])->name('librarian.updateInventory');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');