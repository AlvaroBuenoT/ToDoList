<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;

// Rutas de autenticación
Auth::routes();

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('home');
    Route::post('/', [TaskController::class, 'store']);
    Route::delete('/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
});
