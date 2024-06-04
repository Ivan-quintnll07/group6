<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/offer', function () {
    return view('offer');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/expenseRecord', function () {
    return view('expenseRecord');
});

Route::get('/financialEducation', function () {
    return view('financialEducation');
});

