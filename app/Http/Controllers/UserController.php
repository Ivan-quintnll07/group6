<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request) {
        $loginCredentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        if(Auth::attempt($loginCredentials)) {
            $request->session()->regenerate();
            return redirect('/principal');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.'
        ]);
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:50',
        ]);

        $user = auth()->user();

        $categories = $user->custom_categories ?? [];

        if (!in_array($request->category, $categories)) {
            $categories[] = $request->category;
            $user->custom_categories = $categories;
            $user->save();
        }

        return redirect()->back()->with('success', 'Categoría agregada');
    }

    public function register(Request $request) {
        $registerCredentials = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|min:8',
        ]);

        $user = User::create([
            'name' => $registerCredentials['name'],
            'email' => $registerCredentials['email'],
            'password' => Hash::make($registerCredentials['password']),
            'proveedor' => $request->input('proveedor'),
            'tipo_tarjeta' => $request->input('tipo_tarjeta'),
            'fecha_corte' => $request->input('fecha_corte'),
            'fecha_pago' => $request->input('fecha_pago'),
        ]);

        if($user){
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('/principal');
        }

        return back()->withErrors([
            'register' => 'No se pudo crear el usuario, intenta de nuevo.'
        ]);
    }
}
