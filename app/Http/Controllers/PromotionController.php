<?php

namespace App\Http\Controllers;

use App\Models\Promotion;

class PromotionController extends Controller
{
    public function index()
    {
        // Trae todas las promociones y las agrupa por categoría
        $offers = Promotion::all()->groupBy('category');

        // Para verificar qué trae $offers, puedes usar dd($offers) temporalmente:
        // dd($offers);

        // Retorna la vista con las promociones agrupadas
        return view('offers.offer', compact('offers'));
    }
}

