<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

Route::get('/', [UsersController::class,'index'])->name('login');
Route::post('/login-dashboard', [UsersController::class,'authenticate'])->name('login dashboard');


Route::get('/crear-cuenta', [UsersController::class, 'create'])->name('crear cuenta');
Route::post('/save-user', [UsersController::class, 'store'])->name('guardar usuario');
Route::get('/logout', [UsersController::class, 'destroy'])->name('logout');


Route::middleware(['auth', 'verified'])->group(function () {
  
    Route::get('/dashboard', [HomeController::class, 'muestradatos'])->name('usuarios');
 
});
