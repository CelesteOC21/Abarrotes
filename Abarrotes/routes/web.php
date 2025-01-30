<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('login');
});

Route::get('/Inicio', function () {
  return view('app');
})->name('Inicio');

Route::get('/resetpassword', function () {
  return view('plantillas.resetpassword');
})->name('resetpassword');

Route::get('/Clientes', function () {
  return view('plantillas.Clientes');
})->name('Clientes');

Route::get('/Pedidos', function () {
  return view('plantillas.pedidos');
})->name('Pedidos');
