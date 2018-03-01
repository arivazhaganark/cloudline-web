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
    Route::match(['get', 'post'], 'profile', 'HomeController@myprofile')->name('profile');
    Route::match(['get','post'],'settings','HomeController@settings')->name('settings');
    Route::get('registerusers', 'CustomerController@rindex');
    Route::get('registerusers/create', 'CustomerController@ruser');
    Route::post('registerusers/store', 'CustomerController@rstore');
    Route::get('registerusers/verify/{token}', 'CustomerController@confirm');
    Route::get('demorequestform/{token}', 'CustomerController@demorequest');    
    Route::post('demorequestform/store', 'CustomerController@dstore');
    Route::get('registerusers/{id}/edit', 'CustomerController@redit');
    Route::put('registerusers/{id}', 'CustomerController@rupdate');
    Route::delete('registerusers/{id}', 'CustomerController@rdestroy');
    Route::match(['get', 'post'],'demorequest/{id}', 'CustomerController@view');
    Route::get('upgrade_customer/{id}', 'CustomerController@upgradecustomer');
    Route::put('upgrade_customer/{id}', 'CustomerController@upgradecustomerstore');
    Route::resource('customers', 'CustomerController');
    Route::resource('partners', 'PartnerController');
});

Route::get('/', function () {
    return view('welcome');
});
Route::namespace('site')->group(function () {
    Route::get('/', 'SiteController@homepage')->name('welcome');
    Route::get('registerusers', 'CustomerController@ruser');
    Route::post('registerusers/store', 'CustomerController@rstore');
    Route::get('registerusers/verify/{token}', 'CustomerController@confirm');
    Route::get('demorequest/{token}', 'CustomerController@demorequest');
    Route::post('demorequest/store', 'CustomerController@dstore');
    Route::get('contactus', 'ContactusController@index');
    Route::post('contactus/store', 'ContactusController@store');
    Route::get('starter','SiteController@starter');
    Route::post('starter/store','SiteController@starterstore');
    Route::resource('partner', 'PartnerController');
    Route::get('{page}', 'SiteController@page');
});
