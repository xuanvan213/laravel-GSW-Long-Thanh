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

$appRoutes = function() {
    Route::get('/',"HomeController@index"); 
};
$appDarkRoutes = function() {
    Route::get('/',"HomeDarkController@index"); 
};

Route::group(array('domain' => 'gswlongthanh.anzbds.com'), $appRoutes);
Route::group(array('domain' => 'dark.gswlongthanh.anzbds.com'), $appDarkRoutes);