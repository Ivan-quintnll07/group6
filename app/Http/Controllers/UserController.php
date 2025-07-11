<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request) {
        $loginCredentials = $request->validate([
            'email'=>'required',
            'password'=>'required|min:3',
        ]);

       if(Auth::attempt($loginCredentials)) {
            $request->session()->regenerate();
            return redirect('/principal');
       }

       return back()->withErrors([]);
    }

    public function register(Request $request) {
        $registerCredentials = $request->validate([
            'email'=>'required|email|unique:users,email',
            'name'=>'required|min:3',
            'password'=> 'required|min:8',
        ]);

        $user = User::create($registerCredentials);

        if($user){
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('/principal');
        }

        return back()->withErrors([]);
   }
}
