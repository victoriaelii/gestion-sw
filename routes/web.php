<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// routes/web.php

Route::get('/doctores', function () {
    Log::info('Ruta /doctores alcanzada');
    return view('doctoresreg');
})->name('doctores');

Route::get('/tabladoctors', function () {
    return view('tabladoctors');
})->name('tabladoctors');

Route::get('/usuariosreg', function () {
    return view('usuariosreg');
})->name('usuariosreg');

Route::get('/tablausers', function () {
    return view('tablausers');
})->name('tablausers');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
