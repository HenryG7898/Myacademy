<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\selection;
use App\Models\applycourse;
use Illuminate\Http\Request;

class Admindashboard extends Controller
{
    public function index(){

        $course = selection::with(['user','course','profile'])->get();
        return view('admin.dashboard',compact('course'));
    }
//    public function deleteapplicants($id){
//    $course = selection::where('select_id','student_id',$id);
//    $course->delete();
//    return view('admin.dashboard');
//    }
}
