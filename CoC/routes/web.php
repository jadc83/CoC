<?php

use App\Http\Controllers\ObjetoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inventarios', InventarioController::class);
Route::resource('objetos', ObjetoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inventarios', [InventarioController::class, 'index']);
Route::get('/inventarios', [InventarioController::class, 'index'])->name('inventarios.index');
Route::get('/objetos', [ObjetoController::class, 'index']);
Route::get('/objetos', [ObjetoController::class, 'index'])->name('objetos.index');
Route::get('/search', [ObjetoController::class, 'search'])->name('search');

require __DIR__.'/auth.php';
