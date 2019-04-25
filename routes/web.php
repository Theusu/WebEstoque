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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/classifications','ClassificationController@index')->name('classifications.index');

Route::get('/classifications/create','ClassificationsController@create')->name('classifications.create');

Route::post('/classifications','ClassificationsController@store')->name('classifications.store');

Route::get('/classifications/{id}','ClassificationsController@show')->name('classifications.show');

Route::get('/classifications/{id}/edit','ClassificationsController@edit')->name('classifications.edit');

Route::put('/classifications/{id}','ClassificationsController@update')->name('classifications.update');

Route::delete('/classifications/{id}/delete','ClassificationsController@destroy')->name('classifications.destroy');
