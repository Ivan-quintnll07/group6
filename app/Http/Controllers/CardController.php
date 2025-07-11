<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function create(Request $request)
    {
        $request->merge([
            'user_id' => Auth::user()->id
        ]);

        $cardData = $request->validate([
            'expiry_date' => 'required|date',
            'cut_off_date' => 'required|date',
            'bank_id' => 'required|exists:banks,id',
            'card_type_id' => 'required|exists:card_types,id',
            'user_id' => 'required|exists:users,id'
        ]);

        if (Card::create($cardData)) {
            return redirect('/principal');
        }

        return back()->withErrors([]);
    }

    public function read(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
