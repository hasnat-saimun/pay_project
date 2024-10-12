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
    //pay bil str
    public function bilCom(){
        return view('marchent.bilPay.bilCompany');
    }
    //pay bil end

    //ticket str
    public function tikForm(){
        return view('marchent.Eticket.ticketForm');
    }  
    ///ticket end
    //shop str
    public function shopingPage(){
        return view('marchent.shoping.shop');
    }  
    ///ticket end
}
