<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'cellphone' => 'required|string',
            'comments' => 'required|string',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.');
    }
}
