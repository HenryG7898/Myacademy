<?php

namespace App\Http\Controllers;

use App\Models\applycourse;
use Illuminate\Http\Request;

class Coursecontroller extends Controller
{
    public function view(){
        $users = applycourse::all();
        return view('users.Applyform',["users"=>$users]);
    }
}
