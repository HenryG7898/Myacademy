<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
class Logincontroller extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function view(){
        return view('users.login');
    }
    public function login(Request $request){
        $valid = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
//dd(auth::check());
//        dd($valid);
        if(Auth::attempt($valid)){
            $request->session()->regenerate();
//            dd(auth::user());

            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'email'=> 'The provided credentials do not match our records'
        ]);

    }
//    public function logout(Request $request){
//        Auth::logout();
//
//        $request->session()->invalidate();
//
//        $request->session()->regenerateToken();
//
//        return redirect('Login');
//    }
}
