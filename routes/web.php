<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//
//    return view('welcome');
//
//});

Route::group(['namespace' => 'Auth', 'middleware' => 'auth'], function () {
    Route::get('login','LoginController@login');
});

//首页
Route::group(['namespace' => 'Home'],function(){
	
    Route::get('/','HomeController@index');
	Route::get('a','HomeController@index');

});






