<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PromotionController extends Controller
{
    public function favorites(): View|RedirectResponse
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $favorites = $user->favorites->groupBy('category');
        $categories = $favorites->keys();

        return view('favoritos', [
            'favorites'    => $favorites,
            'categories'   => $categories,
            'categoryName' => null,
        ]);
    }

    public function favoritesByCategory(string $categoryName): View|RedirectResponse
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $grouped = $user->favorites->groupBy('category');

        if (!$grouped->has($categoryName)) {
            return redirect()->route('favoritos');
        }

        $filtered = collect([$categoryName => $grouped->get($categoryName)]);
        $categories = $grouped->keys();

        return view('favoritos', [
            'favorites'    => $filtered,
            'categories'   => $categories,
            'categoryName' => $categoryName,
        ]);
    }

    public function toggleFavorite(Promotion $promotion): RedirectResponse
    {
        $user = Auth::user();
        $user->favorites()->toggle($promotion->id);

        return back();
    }

 public function index(): View
{
    $offers = Promotion::all()->groupBy('category');
    return view('offers.offer', ['offers' => $offers]);
}


    public function show(Promotion $promotion): View
    {
        return view('offers.show', [
            'offer' => $promotion,
        ]);
    }
}
