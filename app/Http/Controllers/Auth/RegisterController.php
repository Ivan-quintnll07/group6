<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            'name' => 'required|string|max:255',
=======
            'username' => 'required|string|max:255|',
>>>>>>> Stashed changes
=======
            'username' => 'required|string|max:255|',
>>>>>>> Stashed changes
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'proveedor' => 'nullable|string|max:255',
            'tipo_tarjeta' => 'nullable|string|max:255',
            'fecha_corte' => 'nullable|date',
            'fecha_pago' => 'nullable|date',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'proveedor' => $validated['proveedor'] ?? null,
            'tipo_tarjeta' => $validated['tipo_tarjeta'] ?? null,
            'fecha_corte' => $validated['fecha_corte'] ?? null,
            'fecha_pago' => $validated['fecha_pago'] ?? null,
        ]);

        Auth::login($user);

        return redirect('/homepage');
    }
}
