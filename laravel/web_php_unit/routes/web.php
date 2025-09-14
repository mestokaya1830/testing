<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['title' => 'Main Page']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
