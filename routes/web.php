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




Route::get('/admins', 'AdminController@index');

Route::get('mobile/android/create', 'AdminController@create')->name('android.index');
Route::post('mobile/android/store', 'AdminController@store')->name('android.store');

Route::get('mobile/categories', 'CategoryController@index')->name('category.index');
Route::get('mobile/categories/create', 'CategoryController@create')->name('category.create');
Route::post('mobile/categories/store', 'CategoryController@store')->name('category.store');

Route::get('mobile/imageupload', 'CategoryController@imageupload')->name('category.upload');


// Websites Routes

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/mobileDetail/{id}', 'HomeController@mobileDetail')->name('mobileDetail');
Route::get('/getDetail/{id}', 'HomeController@getDetail')->name('getDetail');

Route::get('/import','ImportController@create')->name('import');
Route::post('/import','ImportController@store')->name('import');

Route::get('test', function (){
    (new \App\Import())->importToDb();
    dd('done');
});
