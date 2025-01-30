<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/reset', function () {
    return view('resetpassword');
})->name('resetpassword');
