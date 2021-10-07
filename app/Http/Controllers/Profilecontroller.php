<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Profile;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    public function view(){
//        $currentImage = Profile::with('user');
        $users = Experience::with('user');

        $user = Profile::get();
//        $users->get(auth()->user()->incrementing);
//        $users->get(Auth::id());
//        dd($users);
        return view('users.profile',['users'=>$users,'user'=>$user]);
    }

    public function store(Request $request){
        $request->validate([
            'Profile' => 'required','mimes:png,jpg,jpeg','max:5048'
        ]);

        $pathpfp = $request->file('Profile')->store('public');

        $path = new Profile;
        $path->Profile = $pathpfp;
        $path->student_id = Auth::id();
        $path->save();
//        $currentImage = "/public/" . uniqid('', true) . "." . $request->file("Profile")->getClientOriginalExtension();
//        $currentImage = "/public/" . uniqid('', true) . "." . $request->file("Profile")->getClientOriginalExtension();

////dd($currentImage);
//        echo $currentImage;
//        $path->save();

//        if($request->hasFile('Profile')){
//            $file = $request->file('Profile');
//            $extenstion =$file->getClientOriginalExtension();
//            $filename = time().'.'.$extenstion;
//            $file->move('public/',$filename);
//            $path->Profile = $filename;
//        }
////
//        $path->save();
//
        return back()->with('path');

    }
}
