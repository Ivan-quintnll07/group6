<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // Mostrar todas las categorías del usuario
    public function index()
    {
        $user = Auth::user();

        $categories = $user->categories()->get();

        return view('categories.index', compact('categories'));
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $category = new Category();
        $category->name = $request->name;
        $category->user_id = $user->id;
        $category->save();

        return redirect()->back()->with('success', 'Categoría creada correctamente.');
    }


    public function filter($categoryName)
    {
        $user = Auth::user();

        $category = $user->categories()->where('name', $categoryName)->firstOrFail();


        $favorites = $user->favorites()
            ->where('category', $categoryName)
            ->get()
            ->groupBy('category');

        $categories = $user->categories;

        return view('favoritos', compact('favorites', 'categories'));
    }
}
