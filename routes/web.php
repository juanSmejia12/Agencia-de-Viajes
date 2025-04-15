<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PaqueteTuristicoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //para clientes
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

    //para paquetes turisticos 
    Route::get('/paquetes', [PaqueteTuristicoController::class, 'index'])->name('paquete.index');
    Route::get('/paquetes/create', [PaqueteTuristicoController::class, 'create'])->name('paquete.create');
    Route::post('/paquetes', [PaqueteTuristicoController::class, 'store'])->name('paquete.store');
    Route::delete('/paquetes/{paquete}', [PaqueteTuristicoController::class, 'destroy'])->name('paquete.destroy');
    Route::get('/paquetes/{paquete}/edit', [PaqueteTuristicoController::class, 'edit'])->name('paquete.edit');
    Route::put('/paquetes/{paquete}', [PaqueteTuristicoController::class, 'update'])->name('paquete.update');
    Route::get('/paquetes/{paquete}', [PaqueteTuristicoController::class, 'show'])->name('paquete.show');
});



//Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

require __DIR__.'/auth.php';
