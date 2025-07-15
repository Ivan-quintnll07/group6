<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::middleware('auth')->group(function () {
    Route::get('/favoritos', [PromotionController::class, 'favorites'])->name('favoritos');
    Route::get('/favoritos/{category}', [PromotionController::class, 'favoritesByCategory'])->name('favoritos.categoria');
    Route::post('/offers/{promotion}/favorite', [PromotionController::class, 'toggleFavorite'])->name('offers.toggleFavorite');

    Route::get('/perfil', [ProfileController::class, 'show'])->name('perfil.show');
    Route::post('/perfil', [ProfileController::class, 'update'])->name('perfil.update');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/offers', [PromotionController::class, 'index'])->name('offers.index');
Route::get('/offers/{promotion}', [PromotionController::class, 'show'])->name('offers.show');

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
