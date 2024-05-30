<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function create(Request $request) {
      $cardData = $request->validate([
        "expiry_date"=>'required|date',
        "cut_off_date"=>'required|date',
      ]);
    }

    public function read(Request $request){

    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
