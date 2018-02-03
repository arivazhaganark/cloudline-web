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
    Route::get('registerusers', 'CustomerController@ruser');
    Route::get('customers', 'CustomerController@index');
    Route::get('partners', 'PartnerController@index');
});

Route::get('/', function () {
    return view('welcome');
});

