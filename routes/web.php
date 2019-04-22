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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login' , 'LoginController@index');
// eta ekta niyom 
Route::post('/login' , ["uses"=>"LoginController@FormPost" , "as"=>"LoginController.FormPost"]);
//this is second way of doing it 
//it is also called named routing

Route::get('/home' , ["uses"=>"HomeController@index" , "as"=>"home.index"] );

//todo route 

Route::get('/todo' , 'TodoController@getAll')->name('TodoController.getAll');
// this one for name routing