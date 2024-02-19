<?php

use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\ObjetoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inventarios', InventarioController::class);
Route::resource('objetos', ObjetoController::class);
Route::resource('personajes', PersonajeController::class);
Route::resource('habilidades', HabilidadController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/search-objeto', [ObjetoController::class, 'search'])->name('search.objeto');
Route::get('/search-habilidad', [HabilidadController::class, 'search'])->name('search.habilidad');
require __DIR__.'/auth.php';
