<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function Login() {
        return view('login');
    }

    public function loginPost(Request $request){


        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

       if ( Auth::attempt($data) ) {
             $request->session()->regenerate();

            return redirect()->route('home.index');
       }else {
            return redirect()->route('login')->with('failed','Email atau Password Salah');
       }
    }
}
