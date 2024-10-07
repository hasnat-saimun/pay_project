<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marchentControl extends Controller
{
    public function viewHome(){
        return view('marchent.home');
    }
}
