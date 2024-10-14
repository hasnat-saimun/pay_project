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
    // moblile recharge str
    public function rechargForm(){
        return view('marchent.mobileRecharge.rechargeForm'); //mobile recharge form
    }
     // moblile recharge end 

    // bank form str
    public function bankForm(){
        return view('marchent.mobileBank.bankForm'); //bank logo form
    }

    public function logoPage(){
        return view('marchent.mobileBank.logoPage'); // logo form
    }
    // bank form end

    //pay bil str
    public function bilCom(){
        return view('marchent.bilPay.bilCompany');
    }
    public function cardActive(){
        return view('marchent.bilPay.cardActive'); //card active from
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

    //menu part str
    public function bankInfo(){
        return view('marchent.menuPage.bankInfo'); //bank info
    }  

    public function hotlinePage(){
        return view('marchent.menuPage.hotlinePage');//hotline
    }  
    public function rulsePage(){
        return view('marchent.menuPage.rulsePage');//rulse
    }  

    public function passChang(){
        return view('marchent.menuPage.passPage');//password change page
    }  

    //menu part end

    // profile page str
    public function profilePage(){
        return view('marchent.profile');//profile page
    }  
    //profile page end

    //nid page str
    public function nidPage(){
        return view('marchent.nidForm');//profile page
    }  
    //nid page end
}
