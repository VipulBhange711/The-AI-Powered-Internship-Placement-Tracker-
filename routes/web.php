<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('Authentication.login');
});
Route::get('/register', function () {
    return view('Authentication.register');
});
