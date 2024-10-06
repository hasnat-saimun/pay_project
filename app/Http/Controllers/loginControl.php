<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginControl extends Controller
{
    
    public function viewLogin(){
        return view('loginPage.login');
    }
}
