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

Route::get('/new_product', function(){
	return view('new_product');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'ProfileController@show')->name('profile')->middleware('verified');

Route::get('results', 'ProductsController@index')->name('results');

Route::get('provider_register', 'CompaniesController@index')->name('provider_register');

Route::get('company_register', 'CompaniesController@store')->name('company_register');

Route::get('subsidiary_register', 'SubsidiariesController@index')->name('subsidiary_register');

Route::get('save_subsidiary', 'SubsidiariesController@store')->name('save_subsidiary');

Route::get('save_product', 'ProductsController@store')->name('save_product');

Route::get('my_company', 'CompaniesController@show')->name('my_company');

Route::get('my_products', 'ProductsController@show')->name('my_products');

