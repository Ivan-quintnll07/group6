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

        if (Auth::attempt($loginCredentials)) {
            $request->session()->regenerate();
            return redirect('/principal');
        }

        return back()->withErrors([
            'email' => 'Las credenciales son incorrectas.',
        ]);
    }

    public function register(Request $request) {
        $registerCredentials = $request->validate([
            'username' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'proveedor' => 'nullable|string',
            'tipo_tarjeta' => 'nullable|string',
            'fecha_corte' => 'nullable|date',
            'fecha_pago' => 'nullable|date',
        ]);

        $user = User::create([
            'name' => $registerCredentials['username'],
            'username' => $registerCredentials['username'],
            'email' => $registerCredentials['email'],
            'password' => Hash::make($registerCredentials['password']),
            'proveedor' => $registerCredentials['proveedor'] ?? null,
            'tipo_tarjeta' => $registerCredentials['tipo_tarjeta'] ?? null,
            'fecha_corte' => $registerCredentials['fecha_corte'] ?? null,
            'fecha_pago' => $registerCredentials['fecha_pago'] ?? null,
        ]);

        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('/principal');
        }

        return back()->withErrors(['register' => 'No se pudo crear el usuario.']);
    }
}
