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

Route::get('/', function () {
    return view('cms.front_page');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*** User Routes ***/
Route::get('/user/profile', 'UserCtrl@index');


/*** Admin Routes ***/
	Route::match(['get', 'post'], '/admin/login', 'AdminCtrl@index');
// Route::group(['middleware' => ['adminAuth']], function () {
	Route::match(['get', 'post'], '/admin/profile', 'AdminCtrl@profile')->middleware('adminAuth');
// });
