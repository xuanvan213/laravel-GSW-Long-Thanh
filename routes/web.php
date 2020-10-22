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
Route::get('/admin/project', "AdminController@index");
Route::get('/admin/form', "AdminContentController@index");

Route::get('/contact', 'HomeGSWController@getcontact');
Route::post('/contact', 'HomeGSWController@sendEmailContacts');

Route::domain('gswlongthanh.anzbds.com')->group(function () {
    Route::get('/', "HomeGSWController@index"); 

    Route::get('/dark', 'HomeGSWDarkController@index');

    //send mail by dark template
    Route::get('/dark/contact', 'HomeGSWDarkController@getcontact');
    Route::post('/dark/contact', 'HomeGSWDarkController@sendEmailContacts');
    Route::get('/sitemap.xml', 'HomeGSWController@sitemap');

});

Route::domain('dark.gswlongthanh.anzbds.com')->group(function () {
    Route::get('/', "HomeGSWDarkController@index");
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
    Route::get('/theriver', 'HomeTheRiverController@index');
    Route::get('/theriver-dark', 'HomeTheRiverController@index');
    Route::get('/sitemap.xml', 'HomeTheRiverController@sitemap');
});

Route::domain('dark.theriver.anzbds.com')->group(function () {
    Route::get('/', "HomeTheRiverDarkController@index");
});

Route::domain('opalgarden.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalGardenController@index");
    Route::get('/opal-garden', 'HomeOpalGardenController@index');
    Route::get('/opal-garden-dark', 'HomeOpalGardenController@index');
    Route::get('/sitemap.xml', 'HomeOpalGardenController@sitemap');
});

Route::domain('dark.opalgarden.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalGardenDarkController@index");
});


Route::domain('opalskyline.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalSkylineController@index");
    Route::get('/opal-skyline', 'HomeOpalSkylineController@index');
    Route::get('/opal-skyline-dark', 'HomeOpalSkylineController@index');
    Route::get('/sitemap.xml', 'HomeOpalSkylineController@sitemap');
});

Route::domain('dark.opalskyline.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalSkylineDarkController@index");
});

Route::domain('opalriverside.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalRiversideController@index");
    Route::get('/opal-riverside', 'HomeOpalRiversideController@index');
    Route::get('/opal-riverside-dark', 'HomeOpalRiversideController@index');
    Route::get('/sitemap.xml', 'HomeOpalRiversideController@sitemap');
});

Route::domain('dark.opalriverside.anzbds.com')->group(function () {
    Route::get('/', "HomeOpalRiversideDarkController@index");
});
Auth::routes();

Route::get('/admin/project', 'HomeController@index')->name('home');
