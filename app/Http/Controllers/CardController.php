<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function create(Request $request) {
        dd($request);
      $cardData = $request->validate([
        'expiry_date'=>'required|date',
        'cut_off_date'=>'required|date',
        'bank_id'=>'required|exists:banks,id',
      ]);


      if(Card::create($cardData)){
        return redirect('/');
      }

      return back()->withErrors([]);
    }

    public function read(Request $request){

    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
