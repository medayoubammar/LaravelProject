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




Route::get('/home', 'HomeController@index')->name('home');


Route::get('/allorder','AllRequestController@getorders'); //getALL

Route::delete('/allorder/{id}','AllRequestController@destroy')->name('order.destroy')->middleware('auth');
//Delete


Route::post('/addorderbyresto','AllRequestController@store');  //AddOrder

Route::get('/getname/{user_id}','AllRequestController@getById')->name('order.show'); //GetBy ID



