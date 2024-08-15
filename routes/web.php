<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PersonasController;

Route::get('/', function () {
    return view('home');
})->name('inicio');


Route::prefix('servicios')->group(function () {
    Route::get('/', [LandingController::class, 'servicios'])->name('servicios.index');
    Route::get('/{id}', [LandingController::class, 'detalleServicio'])
        ->name('servicios.detalle')
        ->where('id', '[A-Za-z]+'); 
});

Route::prefix('proyectos')->group(function () {
    Route::get('/', [LandingController::class, 'proyectos'])->name('proyectos.index');
    Route::get('/{id}', [LandingController::class, 'detalleProyecto'])
        ->name('proyectos.detalle')
        ->where('id', '[A-Za-z]+');
});


Route::prefix('blogs')->group(function () {
    Route::get('/', [LandingController::class, 'blogs'])->name('blogs.index');
    Route::get('/{id}', [LandingController::class, 'detalleblog'])
        ->name('blogs.detalle')
        ->where('id', '[0-9]+'); 
});

Route::prefix('clientes')->group(function () {
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
    Route::get('/crear', [ClientesController::class, 'create'])->name('clientes.create');
    Route::post('crear', [ClientesController::class, 'store'])->name('clientes.store');
    
    Route::get('/{id}/editar', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::patch('/{id}', [ClientesController::class, 'update'])->name('clientes.update');
    Route::get('/{id}', [ClientesController::class, 'show'])
        ->name('clientes.show')
        ->where('id', '[A-Za-z0-9]+');
    
    Route::delete('/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
});

Route::get('/contacto', [LandingController::class, 'contacto'])->name('contacto.index');
Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');
