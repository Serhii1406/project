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

Route::get('/', 'MainController@main')->name('main');

Route::get('/home', 'IndexController@index')->name('index');



Route::get('/product', 'ProductController@offer')->name('product');
Route::get('/product/add', 'ProductController@add')->name('add')->middleware('moders');
Route::post('/product/add', 'ProductController@gode');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('delete')->middleware('moders');
Route::get('/product/edit/{products}', 'ProductController@edit')->name('edit')->middleware('moders');
Route::post('/product/edit/{product}', 'ProductController@update');



Route::get('/users', 'UserController@user')->name('user')->middleware('moders');



Route::get('/admin', 'AdminController@admin')->name('admin')->middleware('moders');



Auth::routes();


