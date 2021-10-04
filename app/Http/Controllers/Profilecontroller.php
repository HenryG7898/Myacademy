<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    public function view(){
        return view('users.profile');
    }

    public function store(Request $request){
        $request->validate([
            'Profile' => 'required','mimes:png,jpg,jpeg','max:5048'
        ]);


        $pro = new Profile();
         $pro->Profile = $filename;
         $pro->student_id = Auth::id();
            if($request->hasFile('Profile')){
                $file = $request->file('Profile');
                $extention = $file->getClientOrignalExtension();
                $filename = time().'-'.$extention;
                $file->move('/public/uploads/profiles/'. $filename);
                $pro->proflie = $filename;
            }
        $pro->save();


        // $newImageName = $request->Profile->extension();
        // dd($newImageName);

    }
}
