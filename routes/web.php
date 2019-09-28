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
    return view('frontend.booking');
});

Route::get('/dashboard',function(){
	return view('admin.dashboard');
})->name('adhome');

Route::resource('/type','TypeController');

Route::resource('/room','RoomController');

Route::resource('/owner','OwnerController');

Route::resource('/building','BuildingController');

Route::post('/helo','BookingController@helo')->name('helo');