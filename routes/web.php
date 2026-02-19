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
Route::get('/studentpage', function () {
    return view('Authentication.frontend-pages.studentRegistration');
});
Route::get('/studentDashboard', function () {
    return view('Dashboard.studentDashboard');
});
