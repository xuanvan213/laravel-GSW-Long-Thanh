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

//email contact
//send mail by dark template
Route::get('/contact', 'HomeController@getcontact');
Route::post('/contact', 'HomeController@sendEmailContacts');

Route::domain('gswlongthanh.anzbds.com')->group(function () {
    Route::get('/', "HomeController@index"); 

    Route::get('/dark', 'HomeDarkController@index');

    //send mail by dark template
    Route::get('/dark/contact', 'HomeDarkController@getcontact');
    Route::post('/dark/contact', 'HomeDarkController@sendEmailContacts');
    Route::get('/sitemap.xml', 'HomeController@sitemap');

});

Route::domain('dark.gswlongthanh.anzbds.com')->group(function () {
    Route::get('/', "HomeDarkController@index");
});

Route::domain('theorigami.anzbds.com')->group(function () {
    Route::get('/', "HomeOrigamiController@index");
    Route::get('/origami', 'HomeOrigamiController@index');
    Route::get('/origami-dark', 'HomeOrigamiDarkController@index');
    Route::get('/sitemap.xml', 'HomeOrigamiController@sitemap');
});

Route::domain('dark.theorigami.anzbds.com')->group(function () {
    Route::get('/', "HomeOrigamiDarkController@index");
});

Route::domain('moritz.anzbds.com')->group(function () {
    Route::get('/', "HomeMoritzController@index");
    Route::get('/moritz', 'HomeMoritzController@index');
    Route::get('/sitemap.xml', 'HomeMoritzController@sitemap');
});

