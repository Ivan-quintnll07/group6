<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;
use App\Models\Bank;
use App\Models\CardType;

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/cards/create', [CardController::class, 'create']);

Route::get('cards/add', function () {
    return view('cards.form', [
        'banks' => Bank::all(),
        'CardType' => CardType::all(),
    ]);
});

