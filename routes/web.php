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
// Route::get('/', 'HomeLDGDarkController@index');
Route::get('/', 'HomeOpalGardenDarkController@index');

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


Route::domain('ldgsky.anzbds.com')->group(function () {
    Route::get('/', "HomeLDGController@index");
    Route::get('/ldg-sky', 'HomeLDGController@index');
    Route::get('/ldg-sky-dark', 'HomeLDGDarkController@index');
    Route::get('/sitemap.xml', 'HomeLDGController@sitemap');
});

Route::domain('dark.ldgsky.anzbds.com')->group(function () {
    Route::get('/', "HomeLDGDarkController@index");
});


Route::domain('theriver.anzbds.com')->group(function () {
    Route::get('/', "HomeTheRiverController@index");
    Route::get('/ldg-sky', 'HomeTheRiverController@index');
    Route::get('/ldg-sky-dark', 'HomeTheRiverController@index');
    Route::get('/sitemap.xml', 'HomeTheRiverController@sitemap');
});

Route::domain('dark.theriver.anzbds.com')->group(function () {
    Route::get('/', "HomeTheRiverDarkController@index");
});

Route::domain('opalgarden.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalGardenController@index");
    Route::get('/ldg-sky', 'HomeOpalGardenController@index');
    Route::get('/ldg-sky-dark', 'HomeOpalGardenController@index');
    Route::get('/sitemap.xml', 'HomeOpalGardenController@sitemap');
});

Route::domain('dark.opalgarden.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalGardenDarkController@index");
});