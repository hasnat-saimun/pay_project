<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[
    'uses' => 'UserController@viewPage',
    'as'   =>'viewPage'
]);

// marchent login strat
Route::get('/login/page',[
    'uses' => 'loginControl@viewLogin',
    'as'   =>'viewLogin'
]);

// marchent login Ended
Route::get('/marchent/nav',[
    'uses' => 'marchentControl@nav',
    'as'   =>'nav'
]);
// marchent home page strat
Route::get('/marchent/view/page',[
    'uses' => 'marchentControl@viewHome',
    'as'   =>'viewHome'
]);

Route::get('/marchent/bil/page',[       
    'uses' => 'marchentControl@bilCom', // bilPay page 
    'as'   =>'bilCom'
]);

Route::get('/marchent/card/active',[       
    'uses' => 'marchentControl@cardActive', // card active page 
    'as'   =>'cardActive'
]);

Route::get('/marchent/ticket/',[       
    'uses' => 'marchentControl@tikForm', // ticket page 
    'as'   =>'tikForm'
]);

Route::get('/marchent/shoping/page',[       
    'uses' => 'marchentControl@shopingPage', ///shoping page
    'as'   =>'shopingPage'
]);

Route::get('/marchent/bank/form',[       
    'uses' => 'marchentControl@bankForm', ///bank logo form page
    'as'   =>'bankForm'
]);

Route::get('/marchent/bank/logo',[       
    'uses' => 'marchentControl@logoPage', /// logo form page
    'as'   =>'logoPage'
]);

Route::get('/marchent/mobile_recharge',[       
    'uses' => 'marchentControl@rechargForm', /// mobile recharge form page
    'as'   =>'rechargForm'
]);

Route::get('/marchent/bank/data_entry',[       
    'uses' => 'marchentControl@bankInfo', ///  bank info menu part page
    'as'   =>'bankInfo'
]);

Route::get('/marchent/hotline',[       
    'uses' => 'marchentControl@hotlinePage', ///  hotline page
    'as'   =>'hotlinePage'
]);

Route::get('/marchent/rules',[       
    'uses' => 'marchentControl@rulsePage', /// rulse page
    'as'   =>'rulsePage'
]);

Route::get('/marchent/change_password',[       
    'uses' => 'marchentControl@passChang', ///  password chang page
    'as'   =>'passChang'
]);
// marchent homepage Ended

// report page route
Route::get('/report/daily',[
   'uses'   => 'reportControl@dailyReport',
   'as'     => 'dailyReport' 
]);


