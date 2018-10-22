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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
	Route::post('message/send','HomeController@messageSend')->name('message.send');
	Route::get('message', 'HomeController@displayMessage')->name('message.display');
	Route::any('message/getdata','HomeController@getMessage')->name('message.get');
});