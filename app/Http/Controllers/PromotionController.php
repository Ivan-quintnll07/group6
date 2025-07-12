<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Support\Facades\Auth;

class PromotionController extends Controller
{
    public function index()
    {
        $offers = Promotion::all()->groupBy('category');
        return view('offers.offer', compact('offers'));
    }

    public function toggleFavorite(Promotion $promotion)
    {
        $user = Auth::user();

        if ($user->favorites()->where('promotion_id', $promotion->id)->exists()) {
            $user->favorites()->detach($promotion->id);
        } else {
            $user->favorites()->attach($promotion->id);
        }

        return back();
    }
}

