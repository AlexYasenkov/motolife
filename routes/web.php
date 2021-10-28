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

//home page
Route::get('/', 'HomeController@index');

//contacts
Route::get('/contacts', 'HomeController@contact');

//contacts reviews
Route::post('/contacts', 'HomeController@store');

//bike
Route::get('/bike/{brand}', 'BikeController@index')->name('bikeBrand');
Route::get('/bike/{brand}/{model}', 'BikeController@show')->name('showBike');

//order
Route::post('/order', 'OrderController@store')->name('orderStore');

//news
Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show')->name('showNews');

//town
Route::get('/town/{name}', 'TownController@show')->name('showTown');

//admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
