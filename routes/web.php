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

Route::get('pro', 'ProductsController@products_show');
Route::post('prostore', 'ProductsController@products_store');
Route::get('pro/{product}', 'ProductsController@oneproduct');
Route::get('categories', 'ProductsController@categories_show');
Route::post('categoriesstore', 'ProductsController@categories_store');
