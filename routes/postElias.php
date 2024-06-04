<?php

use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('users.signup');
});


