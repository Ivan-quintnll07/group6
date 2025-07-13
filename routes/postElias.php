<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;


Route::middleware('auth')->group(function () {

    Route::get('/favoritos', [PromotionController::class, 'favorites'])->name('favoritos');
    Route::get('/favoritos/{category}', [PromotionController::class, 'favoritesByCategory'])->name('favoritos.categoria');


    Route::post('/offers/{promotion}/favorite', [PromotionController::class, 'toggleFavorite'])->name('offers.toggleFavorite');
});


Route::get('/offers', [PromotionController::class, 'index'])->name('offers.index');
Route::get('/offers/{promotion}', [PromotionController::class, 'show'])->name('offers.show');


Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');
