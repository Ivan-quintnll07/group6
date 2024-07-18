<?php

use App\Models\Promotion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('users.signup');
});

Route::get('/home', function () {
    return view('users.homepage', [
        'info' => Auth::user()
    ]);
});

Route::get('/offer', function (){
    return view('offers.offer', [
        'offers' => Promotion::all()
    ]);
});

