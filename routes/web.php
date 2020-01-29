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

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/categories', 'CategoryController@index')->name('category.index');
Route::get('/categories/{id}/show', 'CategoryController@show')->name('category.show');
Route::get('/categories/create', 'CategoryController@create')->name('category.create');
Route::post('/categories/store', 'CategoryController@store')->name('category.store');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/categories/{id}/update', 'CategoryController@update')->name('category.update');
Route::get('/categories/{id}/delete', 'CategoryController@delete')->name('category.delete');




