<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request) {
        $loginCredentials = $request->validate([
            'Email'=>'required|exists:users,email',
            'Password'=>'required|min:8',
        ]);

       if(Auth::attempt($loginCredentials)){
            return redirect('/');
       }

       return back()->withErrors([]);
    }

    public function register(Request $request) {
        $registerCredentials = $request->validate([
            'email'=>'required|email|unique:users,email',
            'name'=>'required|min:3',
            'password'=> 'required|min:8',
        ]);

        if(User::create($registerCredentials)){
            return redirect('/');
        }

        return back()->withErrors([]);
   }
}
