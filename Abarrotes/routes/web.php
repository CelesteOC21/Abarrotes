<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// -----------------------------------------------------------------------------------
// Ruta para mostrar el formulario de login (GET)
Route::get('/login', function () {
  return view('app');
})->name('login');
// -----------------------------------------------------------------------------------

// Ruta para manejar el envío del formulario de login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// -----------------------------------------------------------------------------------
//Ruta para logearte
Route::post('/login', [AuthController::class, 'login'])->name('login');
// -----------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------
//Ruta para crear usuarios

Route::get('/register', function () {
  return view('createaccount');
})->name('createaccount');

Route::post('/register', [AuthController::class, 'register'])->name('register');

// -----------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------
//Ruta para resetear contraseña
Route::get('/reset-password', function () {
  return view('resetpassword');
})->name('resetpassword');

Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('resetpassword.post');
// -----------------------------------------------------------------------------------
