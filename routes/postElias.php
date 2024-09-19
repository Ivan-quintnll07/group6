<?php

use App\Models\Promotion;
use Carbon\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/signup', function () {
    return view('users.signup');
})->name('registro');

Route::get('/home', function () {
    return view('users.homepage', [
        'info' => Auth::user()
    ]);
});

Route::get('/principal', function () {
    return view ('users.principal');
});

