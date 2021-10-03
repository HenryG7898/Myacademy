<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class Registercontroller extends Controller
{
    public function view(){
        return view('users.register');
    }
    public function register(Request $request){
        $validate = $request->validate([
            'Fname' =>['required','string'],
            'Lname' =>['required','string'],
            'Mname' =>['required','string'],
            'Gender' =>['required','string'],
            'parish' =>['required','string'],
            'DOB' =>['required'],
            'address' =>['required','string'],
            'telephone' =>['required','string','numeric'],
            'trn' =>['required','string','numeric'],
            'email' =>['required','string','email'],
            'password' =>['required','min:5','alpha_dash','confirmed','same:password_confirmation'],
        ]);

        $cus = new User();
        $cus->Fname = $request->Fname;
        $cus->Mname = $request->Mname;
        $cus->Lname = $request->Lname;
        $cus->email = $request->email;
        $cus->Gender = $request->Gender;
        $cus->address = $request->address;
        $cus->parish = $request->parish;
        $cus->DOB = $request->DOB;
        $cus->telephone = $request->telephone;
        $cus->trn = $request->trn;
        $cus->password = Hash::make($request->password);
        $cus->save();

        return  redirect('Login');
    }
}
