<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard default
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Halaman profil user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route khusus untuk ADMIN
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // nanti bisa ganti ke controller
    })->name('admin.dashboard');
});

// Route khusus untuk GURU
Route::middleware(['auth', 'checkRole:guru'])->group(function () {
    Route::get('/guru/dashboard', function () {
        return view('guru.dashboard'); // nanti bisa ganti ke controller
    })->name('guru.dashboard');
});

// Route khusus untuk SISWA
Route::middleware(['auth', 'checkRole:siswa'])->group(function () {
    Route::get('/siswa/dashboard', function () {
        return view('siswa.dashboard'); // nanti bisa ganti ke controller
    })->name('siswa.dashboard');
});

require __DIR__.'/auth.php';
