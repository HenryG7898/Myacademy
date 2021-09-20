<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function view(){
        return view('users.contact');
    }
    public function contacts(Request $request){
        $validate = $request->validate([
            'name' =>['required','string'],
            'describe' =>['required','string'],
            'phone_number' =>['required','string','numeric'],
            'email' =>['required','string','email'],
        ]);

        $cus = new contact();
        $cus->name = $request->name;
        $cus->phone_number = $request->phone_number;
        $cus->email = $request->email;
        $cus->describe = $request->describe;
        $cus->save();

        return redirect('users.Home');
    }
}
