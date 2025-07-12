<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Support\Facades\Auth;

class PromotionController extends Controller
{
    public function index()
    {
        $offers = Promotion::all()->groupBy('category');

        $favorites = [];

        if (auth()->check()) {
            $favorites = auth()->user()->favorites->pluck('id')->toArray();
        }

        return view('offers.offer', compact('offers', 'favorites'));
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
