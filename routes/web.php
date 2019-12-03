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


Route::group([
    'middleware' => ['web'],
    'prefix' => Config::get('route_prefix')
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/cases', 'PageController@case')->name('cases');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
