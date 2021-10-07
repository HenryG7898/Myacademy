<?php

namespace App\Http\Controllers;
//use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Logincontroller extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function view(){

//        if(auth()->user()->	Status == 'Student'){
//            return view('users.login'); /*this would be user home page*/
//        }else
//        {
//            return view('users.login'); /*this would be admin home page*/
//        }
        return view('users.login');

    }
    public function login(Request $request){
        $valid = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($valid)){
            if (Auth::user()->Status == 'Student') {
                return view ('auth.Home');
            }
            return view('admin.home');
        }
//dd(auth::check());
//        dd($valid);
//        if(Auth::attempt(['email' => 'Admin@gmail.com', 'password' => 12345678, 'Status' => 'Admin'])){
//            $request->session()->regenerate();
////            dd(auth::user());
//
//            return redirect()->intended('');
//        }elseif(Auth::attempt($valid)){
//            $request->session()->regenerate();
//            return view('auth.Home');
//        }




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
