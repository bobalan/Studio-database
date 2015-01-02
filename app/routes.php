<?php
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

//Route::get('/', function()
//{
//	return View::make('home'); 
//        
//})->before('auth');;
Route::get('/', 'DealController@index')->before('auth');
Route::get('/deal/{id}', 'DealController@show')->before('auth');

Route::get('create', function()
{
return View::make('dealcreate');
})->before('auth');;

Route::post('create', array('uses' => 'DealController@create'))->before('auth');
Route::get('/destroy/{id}', 'DealController@destroy')->before('auth');
