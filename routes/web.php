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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('google-map')->group(function () {
    Route::get('/','GoogleMapController@index')->name('google.map.index');
    Route::post('/post','GoogleMapController@store')->name('google.map.store');
});

// Route::group([], function () {
//     Route::resource('categories', 'CategoryController');
// });
