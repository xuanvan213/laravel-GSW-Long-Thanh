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
Route::get('/', 'HomeController@index');
Route::get('/dark', 'HomeDarkController@index');

$appRoutes = function() {
    Route::get('/',"HomeController@index"); 
};
$appDarkRoutes = function() {
    Route::get('/',"HomeDarkController@index"); 
};

Route::group(array('domain' => 'gswlongthanh.anzbds.com'), $appRoutes);
Route::group(array('domain' => 'dark.gswlongthanh.anzbds.com'), $appDarkRoutes);

//email contact
//send mail by dark template
Route::get('/contact', 'HomeController@getcontact');
Route::post('/contact', 'HomeController@sendEmailContacts');

//send mail by dark template
Route::get('/dark/contact', 'HomeDarkController@getcontact');
Route::post('/dark/contact', 'HomeDarkController@sendEmailContacts');