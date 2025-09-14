<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['title' => 'Main Page']);
});
