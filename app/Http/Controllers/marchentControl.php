<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marchentControl extends Controller
{
    public function nav(){
        return view('marchent.nav&hover');
    }

    public function viewHome(){
        return view('marchent.home');
    }

    public function bilCom(){
        return view('marchent.bilPay.bilCompany');
    }
}
