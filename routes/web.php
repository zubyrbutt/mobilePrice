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


Route::get('/admins', 'AdminController@index');

Route::get('mobile/android/create', 'AdminController@create')->name('android.index');
//Route::get('mobile/android/create', 'AndroidController@create')->name('android.create');
//Route::POST('mobile/android/fetch', 'AndroidController@fetch')->name('dynamicDependent.fetch');


