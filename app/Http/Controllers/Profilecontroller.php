<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    public function view(){
        return view('users.profile');
    }
}
