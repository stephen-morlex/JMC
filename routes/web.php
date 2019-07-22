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


// Auth::routes();



Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/services', 'ServiceController@index')->name('service.index');

Route::get('/services/{slug}', 'ServiceController@show')->name('service.show');

Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/galleries', 'GalleryController@index')->name('gallery.index');

Route::get('/teams', 'TeamController@index')->name('team.index');

Route::get('/consultancy-approach', 'ConsultancyController@index')->name('consultancy.index');

Route::get('/associates', 'AssociateController@index')->name('associate.index');

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::post('/contact/send', 'ContactController@store')->name('contact.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});