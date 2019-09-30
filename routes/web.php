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
    return view('frontend.home');
})->name('home');

<<<<<<< HEAD
Route::get('/dashboard', 'DashboardController@show')->name('adhome');

Route::get('/avaliable_room','AvaliableRoomController@show')->name('a_room');

Route::get('/avaliable_room/detail','AvaliableRoomController@detail');


=======
Route::get('/home',function(){
	return view('home');
});

Route::get('/dashboard', function() {
	return view('admin.dashboard');
})->name('adhome');
>>>>>>> origin/wai-hein-mr-branch

Route::group(['middleware' => ['role:admin']],function(){
Route::get('/avaliable_room','AvaliableRoomController@show')->name('a_room');

Route::resource('/type','TypeController');

Route::resource('/room','RoomController');

Route::resource('/owner','OwnerController');

Route::resource('/building','BuildingController');

Route::post('/helo','BookingController@helo')->name('helo');

<<<<<<< HEAD
// Route::get('/sendemail','SendEmailController@index');

//Route::post('/sendemail/send','SendEmailController@send');
Auth::routes();

Route::get('/userhome', 'HomeController@index')->name('userhome');
Route::get('/sendMail', 'MailController@basic_email')->name('sendMail');
=======
Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');
});
Auth::routes();

Route::get('/userhome', 'HomeController@index')->name('userhome');
>>>>>>> origin/wai-hein-mr-branch
