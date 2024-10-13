<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportControl extends Controller
{
    public function dailyReport(){
        return view('marchent.report.dailyReport');
    }
}
