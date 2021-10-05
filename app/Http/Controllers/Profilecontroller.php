<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    public function view(){
        $users = Profile::where('Profile')->get();
        return view('users.profile',['users'=>$users]);
    }

    public function store(Request $request){
        $request->validate([
            'Profile' => 'required','mimes:png,jpg,jpeg','max:5048'
        ]);

        $path = new Profile();
        $path->Profile = $request->Profile;
        $path->student_id = Auth::id();
        $path->save();
        $currentImage = "/public/" . uniqid('', true) . "." . $request->file("Profile")->getClientOriginalExtension();
        $path = $request->file('Profile')->storeAs('/',$currentImage);
//dd($currentImage);
        echo $currentImage;
//        $path->save();

//        if($request->hasFile('Profile')){
//            $file = $request->file('Profile');
//            $extenstion =$file->getClientOriginalExtension();
//            $filename = time().'.'.$extenstion;
//            $file->move('public/',$filename);
//            $path->Profile = $filename;
//        }
//
//        $path->save();

        return view('users.profile', compact('path',),['path'=>$path]);
    }
}
