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

Route::get('/',[
	'uses' => 'EcommerceController@index',
	'as' => '/'
]);

Route::get('/category-product',[
	'uses' => 'EcommerceController@categoryProduct',
	'as' => 'category-product'
]);

Route::get('/product-details',[
	'uses' => 'EcommerceController@productDetails',
	'as' => 'product-details'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-cateogry',[
	'uses' => 'CategoryController@addCategory',
	'as' => 'add-cateogry'
]);

Route::post('/new-category',[
	'uses' => 'CategoryController@newCategory',
	'as' => 'new-category'
]);

Route::get('/manage-cateogry',[
	'uses' => 'CategoryController@manageCategory',
	'as' => 'manage-cateogry'
]);