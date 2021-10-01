<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\selection;
use App\Models\applycourse;
use Illuminate\Http\Request;

class Coursecontroller extends Controller
{
    public function view()
    {
        $users = applycourse::all();
        return view('users.Applyform', ["users" => $users]);
    }

    public function apply(Request $request)
    {


       Selection::create([
            "student_id" => Auth::id(),
            "course_id" => $request->input("course_id"),
//            dd($request),
        ]);

//        return $request->input("course_id");
        return back()->with('message','Thanks For Apply {{$user->Lname}}');
    }


}
