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
Auth::routes();

Route::middleware(['auth'])->namespace('Backend')->prefix('backend')->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('my_profile/{id}', 'HomeController@my_profile')->name('home');
    Route::put('my_profile/{id}', 'HomeController@my_profile_update')->name('home');
    Route::get('registerusers', 'CustomerController@rindex');
    Route::get('registerusers/create', 'CustomerController@ruser');
    Route::post('registerusers/store', 'CustomerController@rstore');
    Route::get('registerusers/verify/{token}','CustomerController@confirm');
    Route::get('registerusers/{id}/edit','CustomerController@redit');
    Route::put('registerusers/{id}','CustomerController@rupdate');
    Route::delete('registerusers/{id}','CustomerController@rdestroy');
    Route::resource('customers', 'CustomerController');
    Route::resource('partners', 'PartnerController');
});

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->namespace('site')->group(function () {
Route::get('registerusers', 'CustomerController@ruser');
Route::post('registerusers/store', 'CustomerController@rstore');
});