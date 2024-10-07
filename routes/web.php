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

// marchent home page strat
Route::get('/marchent/view/page',[
    'uses' => 'marchentControl@viewHome',
    'as'   =>'viewHome'
]);
// marchent homepage Ended


