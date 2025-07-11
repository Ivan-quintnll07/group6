<?php

use App\Models\Promotion;
use Carbon\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;


Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::get('/homepage', function () {
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

Route::get('/offers', [PromotionController::class, 'index'])->name('offers');

Route::get('/promociones', [PromotionController::class, 'index'])->name('promociones');

Route::get('/offers/{promotion}', function (Promotion $promotion) {
    return view ('users.offersInfo', [
        'offer' => $promotion

    ]);
})->name('offerDetails');








