<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('perfil', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'proveedor' => 'nullable|string|max:255',
            'tipo_tarjeta' => 'nullable|string|max:255',
            'fecha_corte' => 'nullable|date',
            'fecha_pago' => 'nullable|date',
        ]);

        $user->update([
            'proveedor' => $request->proveedor,
            'tipo_tarjeta' => $request->tipo_tarjeta,
            'fecha_corte' => $request->fecha_corte,
            'fecha_pago' => $request->fecha_pago,
        ]);

        return redirect()->back()->with('success', 'Perfil actualizado correctamente.');
    }
}

