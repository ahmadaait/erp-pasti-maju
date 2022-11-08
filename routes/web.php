<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Dashboard
Route::get('/home', "HomeController@index")->name('home');

// Produk
Route::get('/product', 'Core\ProductController@index')->name('product.index');
Route::get('/product/create', 'Core\ProductController@create')->name('product.create');
Route::post('/product/store', 'Core\ProductController@store')->name('product.store');
Route::get('/product/edit/{id}', 'Core\ProductController@edit')->name('product.edit');
Route::patch('/product/update/{id}', 'Core\ProductController@update')->name('product.update');
Route::get('/product/delete/{id}', 'Core\ProductController@delete')->name('product.delete');