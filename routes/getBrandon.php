<?php

use App\Models\Promotion;
use Illuminate\Support\Facades\Route;
use App\Models\Bank;
use App\Models\Card;


Route::get('/login', function () {
    return view('users.login');
})->name('login');


Route::get('/calendar', function () {
    return view('calendar', [
        'promotions' => Promotion::all(),
    ]);
});

Route::get('/expenseRecord', function () {
    return view('expenseRecord');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', function () {
    return view('components.perfil', [
        'user' => Auth::user(),
    ]);
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/principal', function () {
    return view('principal');
})->middleware('auth');

Route::get('/favoritos', function () {
    return view('favoritos');
});

Route::get('/addCard', function () {
    return view('cards/addCard', [
        'banks' => Bank::all(),
        'CardType' =>Card::all(),
    ]);
});
