<?php

use App\Models\Promotion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', function () {
    return view('users.register');
})->name('register');


Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/homepage', function () {
    return view('users.homepage', [
        'info' => Auth::user()
    ]);
});


Route::get('/principal', function () {
    return view('users.principal');
});


Route::get('/offers', [PromotionController::class, 'index'])->name('offers');
Route::get('/promociones', [PromotionController::class, 'index'])->name('promociones');

Route::get('/offers/{promotion}', function (Promotion $promotion) {
    return view('users.offersInfo', [
        'offer' => $promotion
    ]);
})->name('offerDetails');


Route::post('/offers/{promotion}/favorite', [PromotionController::class, 'toggleFavorite'])
    ->middleware('auth')
    ->name('offers.toggleFavorite');
