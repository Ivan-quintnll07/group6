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

Route::get('/offers', function () {
    return view ('offers.offer', [
        'offers' => Promotion::all()
    ]);
})->name('offers');



Route::get('/offers/{promotion}', function (Promotion $promotion) {
    return view ('users.offersInfo', [
        'offer' => $promotion
    ]);
})->name('offerDetails');




