<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use Auth;
use App\Models\Quilifaction;
use Illuminate\Http\Request;

class Submession extends Controller
{
    public function index(){

        return view('users.submession', );
    }

    public function qualificat(Request $request){

        $qual = new Quilifaction();
        $qual->Subject = $request->Subject;
        $qual->Exam_body = $request->Exam_body;
        $qual->Award_type = $request->Award_type;
        $qual->Grade = $request->Grade;
        $qual->Year = $request->Year;
        $qual->student_id = Auth::id();
        $qual->save();
        return back();
}
    public function educat(Request $request){
        $edu = new Education();
        $edu->School_nm = $request->School_nm;
        $edu->School_type = $request->School_type;
        $edu->Start_year = $request->Start_year;
        $edu->End_year = $request->End_year;
        $edu->student_id = Auth::id();
        $edu->save();
        return back();
    }
    public function company(Request $request){
        $exp = new Experience();
        $exp->Company_nm = $request->Company_nm;
        $exp->Position = $request->Position;
        $exp->Start_date = $request->Start_date;
        $exp->End_date = $request->End_date;
        $exp->student_id = Auth::id();
        $exp->save();
        return back();
    }
}
