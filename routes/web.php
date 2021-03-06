<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/contact', function(){

    return view('contact');
});
Route::get('/tour-travel', function(){

    return view('tour-travel');
});
Route::get('/immigration', function(){

    return view('immigration');
});

Route::get('/students-immigration', function(){

    return view('students-immigration');
});
Route::get('/visa-assistance', function(){

    return view('visa-assistance');
});
Route::get('/foreign-country-compliance', function(){

    return view('foreign-country-compliance');
});

Route::get('/career', function(){

    return view('career');
});

Route::get('/privacy-policy', function(){

    return view('privacy-policy');
});

Route::get('/terms-and-condition', function(){

    return view('terms-and-condition');
});

Route::get('/eb-5', function(){
  return view('eb-5');
});
Route::Post('/sendmail/send', 'SendEmailController@send');
Route::Post('/sendmail/contact', 'SendEmailController@contact');
Route::Post('/sendmail/career', 'SendEmailController@career');
Route::Post('/contact', 'SendEmailController@contact');
// Route::get('/contact','MainController@contact');
Route::get('/services','MainController@services');
Route::get('/about','MainController@about');
