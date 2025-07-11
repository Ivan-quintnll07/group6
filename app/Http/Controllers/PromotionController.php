<?php

namespace App\Http\Controllers;

use App\Models\Promotion;

class PromotionController extends Controller
{
    public function index()
    {
        $offers = Promotion::all()->groupBy('category');

        return view('offers.offer', compact('offers'));
    }
}

