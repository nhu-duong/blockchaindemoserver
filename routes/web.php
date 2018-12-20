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
//Route::resources([
//    'products' => 'ProductController',
//]);
Route::get('/products', 'ProductController@index');
Route::get('/products/purchase', 'ProductController@purchase');
Route::get('/products/activate', 'ProductController@activate');
Route::get('/products/download', 'ProductController@download');
