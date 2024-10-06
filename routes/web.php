<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[
    'uses' => 'UserController@viewPage',
    'as'   =>'viewPage'
]);

// login strat
Route::get('/login',[
    'uses' => 'loginControl@viewLogin',
    'as'   =>'viewLogin'
]);

//login Ended
