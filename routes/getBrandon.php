<?php

use App\Models\Promotion;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/calendar', function () {
    return view('calendar', [
        'promotions' => Promotion::all(),
    ]);
});

Route::get('/expenseRecord', function () {
    return view('expenseRecord');
});

Route::get('/financialEducation', function () {
    return view('financialEducation');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/education', function () {
    return view('education');
});



