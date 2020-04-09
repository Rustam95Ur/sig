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
    Route::get('/cases', 'HomeController@cases')->name('cases');
    Route::get('/case/{id}', 'HomeController@case')->name('case');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/updated-activity', 'TelegramBotController@updatedActivity');
    Route::post('/send-message', 'TelegramBotController@storeMessage');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
