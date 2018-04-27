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
// Authentication Routes...

Route::middleware(['web'])->namespace('Backend')->prefix('admin')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login')->name('admin.postlogin');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::middleware(['auth:admin','admin'])->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::match(['get', 'post'], 'profile', 'HomeController@myprofile')->name('myprofile');
        Route::match(['get', 'post'], 'settings', 'HomeController@settings')->name('settings');
        Route::get('registerusers', 'CustomerController@rindex');
        Route::get('registerusers/create', 'CustomerController@ruser');
        Route::post('registerusers/store', 'CustomerController@rstore');
        Route::get('registerusers/verify/{token}', 'CustomerController@confirm');
    //    Route::get('demorequestform/{token}', 'CustomerController@demorequest');
    //    Route::post('demorequestform/store', 'CustomerController@dstore');
        Route::get('registerusers/{id}/edit', 'CustomerController@redit');
        Route::put('registerusers/{id}', 'CustomerController@rupdate');
        Route::delete('registerusers/{id}', 'CustomerController@rdestroy');
        Route::match(['get', 'post'], 'demorequest/{id}', 'CustomerController@view');
        Route::get('upgrade_customer/{id}', 'CustomerController@upgradecustomer');
        Route::put('upgrade_customer/{id}', 'CustomerController@upgradecustomerstore');
        Route::post('partners/{id}','PartnerController@approve');
        Route::post('partner/{id}','PartnerController@decline');
        Route::resource('contactus', 'ContactUsController');
        Route::resource('customers', 'CustomerController');
        Route::resource('partners', 'PartnerController');
        Route::resource('cms', 'CmsController');
        Route::resource('products', 'ProductController');
        Route::resource('demorequests', 'DemoRequestController');
    });
});

Route::namespace('site')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@authenticate');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::get('/', 'SiteController@homepage')->name('welcome');
    Route::get('registerusers', 'CustomerController@ruser');
    Route::post('registerusers/store', 'CustomerController@rstore');
    Route::get('registerusers/verify/{token}', 'CustomerController@confirm');
    Route::get('partner/verify/{code}', 'PartnerController@confirm');
    Route::get('demorequest/{token}', 'CustomerController@demorequest');
    Route::post('demorequest/store', 'CustomerController@dstore');
    Route::get('contactus', 'ContactusController@index');
    Route::post('contactus/store', 'ContactusController@store');
    Route::get('starter', 'SiteController@starter');
    Route::post('starter/store', 'SiteController@starterstore');
    Route::get('partner/home','PartnerController@home');
    Route::get('partner/home/create','PartnerController@ruser');
    Route::post('partner/home/store','PartnerController@rstore');
    Route::get('partner/registerusers/{id}','PartnerController@view');
    Route::get('partner/registerusers/{id}/edit','PartnerController@redit');
    Route::put('partner/registerusers/{id}', 'PartnerController@rupdate');
    Route::delete('partner/registerusers/{id}', 'PartnerController@rdestroy');
    Route::get('partner/reseller','ResellerController@index');
    Route::get('partner/reseller/create','ResellerController@create');
    Route::post('partner/reseller/email_exists','ResellerController@email_exists');
    Route::post('partner/reseller/store','ResellerController@store');
    Route::get('partner/reseller/edit/{id}','ResellerController@edit');
    Route::put('partner/reseller/{id}','ResellerController@update');
    Route::match(['get', 'post'], 'partner/profile', 'PartnerController@myprofile')->name('profile');
    Route::get('videocall', 'SiteController@videocall');
    Route::post('videocall/store', 'SiteController@videocallstore');
    Route::get('guideline', 'SiteController@guideline');
    Route::resource('partner', 'PartnerController');
    Route::get('{page}', 'SiteController@page');
});
