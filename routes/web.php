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
// ROUTE TO GET DATA FROM STORAGE
Route::get('images/{filename}', function ($filename)
{
    if (is_array($filename)) {
        $filename = implode('/', $filename);
    }
    // storage_path('app') - path to /storage/app folder
    $path = storage_path('app') . '/uploaded_images/' . $filename;
    $file = \File::get($path);
    $type = \File::mimeType($path);

    return \Response::make($file,200)
        ->header("Content-Type", $type);
});

Route::match(['get', 'post'], '/', 'withoutLogin@index');
Route::match(['get'], '/how-it-works', 'withoutLogin@how_it_works');
Route::match(['get'], '/faq', 'withoutLogin@faq');
Route::match(['get'], '/about-us', 'withoutLogin@about_us');
Route::match(['get', 'post'], '/contact-us', 'withoutLogin@contact_us');

// Routes related to registration.
Auth::routes();
Route::get('register/verify/{confirmationCode}', 'Auth\RegisterController@confirmRegistration');
Route::get('/home', 'HomeController@index');


/*** User Routes ***/
//   			{user_name} - make it like this.
Route::get('/user/profile', 'UserCtrl@index');

// Registration process controller.
Route::match(['get', 'post'], '/user/basic-detail', 'HomeController@basic_detail'); // step-1
Route::match(['get', 'post'], '/user/add-services', 'HomeController@registration_add_services'); // step-2








/*
 Admin Routes
 */
Route::match(['get', 'post'], '/admin/login', 'AdminCtrl@login');

// CMS CONTROL
Route::match(['get', 'post'], '/admin/frontpage', 'AdminCtrl@frontpage')->middleware('adminAuth');
Route::match(['get', 'post'], '/admin/add-faqs', 'AdminCtrl@addFaqs')->middleware('adminAuth');


// OTHERS
Route::match(['get', 'post'], '/admin/newsletter', 'AdminCtrl@newsletter')->middleware('adminAuth');
Route::match(['get', 'post'], '/admin/list-users', 'AdminCtrl@listUsers')->middleware('adminAuth');

// OTHERS BY PUSHKER
Route::match(['get','post'],'/admin/contactus','AdminCtrl@contactus')->middleware('adminAuth');
