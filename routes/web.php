<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::match(['get', 'post'], '/', 'withoutLogin@index');
Auth::routes();
Route::get('/home', 'HomeController@index');


/*** User Routes ***/
//   			{user_name} - make it like this.
Route::get('/user/profile', 'UserCtrl@index');


Route::match(['get', 'post'], '/user/dashboard', function (){
	view('auth.dashboard');
});



/*
 Admin Routes
 */
Route::match(['get', 'post'], '/admin/login', 'AdminCtrl@login');

// CMS CONTROL
Route::match(['get', 'post'], '/admin/frontpage', 'AdminCtrl@frontpage')->middleware('adminAuth');

// OTHERS
Route::match(['get', 'post'], '/admin/newsletter', 'AdminCtrl@newsletter')->middleware('adminAuth');
	
// Route::group(['middleware' => ['adminAuth']], function () {
// });
