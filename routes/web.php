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
/* 
    Route Gem Sky World
*/

Route::get('/', 'HomeController@index');
Route::get('/dark', 'HomeDarkController@index');


//email contact
//send mail by dark template
Route::get('/contact', 'HomeController@getcontact');
Route::post('/contact', 'HomeController@sendEmailContacts');

//send mail by dark template
Route::get('/dark/contact', 'HomeDarkController@getcontact');
Route::post('/dark/contact', 'HomeDarkController@sendEmailContacts');

/* 
    Route The Origami
*/
Route::get('/origami', 'HomeOrigamiController@index');
Route::get('/origami-dark', 'HomeOrigamiDarkController@index');


/* 
    Switch domain
*/

//Gem Sky World
$appGSWRoutes = function() {
    Route::get('/',"HomeController@index"); 
};
$appGSWDarkRoutes = function() {
    Route::get('/',"HomeDarkController@index"); 
};

//the Origami
$appOrigamiRoutes = function() {
    Route::get('/',"HomeOrigamiController@index"); 
};
$appOrigamiDarkRoutes = function() {
    Route::get('/',"HomeOrigamiDarkController@index"); 
};


//route group
Route::group(array('domain' => 'gswlongthanh.anzbds.com'), $appRoutes);
Route::group(array('domain' => 'dark.gswlongthanh.anzbds.com'), $appDarkRoutes);
Route::group(array('domain' => 'theorigami.anzbds.com'), $appOrigamiRoutes);
Route::group(array('domain' => 'dark.theorigami.anzbds.com'), $appOrigamiDarkRoutes);