<?php

use App\Models\Promotion;
use Illuminate\Support\Facades\Route;
use App\Models\Bank;
use App\Models\Card;

Route::get('/login', function () {
    return view('users.login');
})->name('login');

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/addCard', function () {
    return view('cards/addCard', [
        'banks' => Bank::all(),
        'CardType' =>Card::all(),
    ]);
});



