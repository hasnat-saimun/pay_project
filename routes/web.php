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

Route::get('/marchent/ticket/',[       
    'uses' => 'marchentControl@tikForm', // bilPay page 
    'as'   =>'tikForm'
]);

Route::get('/marchent/shoping/page',[       
    'uses' => 'marchentControl@shopingPage', ///shoping page
    'as'   =>'shopingPage'
]);
// marchent homepage Ended


