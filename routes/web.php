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

Route::get('/', 'ViewsController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Side .. 
// Categories Route .. 

Route::get('/categories/create', 'CategoriesController@create');

Route::post('/categories/create', 'CategoriesController@store')->name('store-category');
Route::get('/categories', 'CategoriesController@index')->name('index-categories');
Route::get('/categories/edit/{id}', 'CategoriesController@edit')->name('edit-category');
Route::post('/categories/edit/{id}', 'CategoriesController@update')->name('update-category');
Route::get('/categories/delete/{id}', 'CategoriesController@delete')->name('delete-category');

// Progs Route .. 
Route::get('/progs/create', 'ProgsController@create')->name('create-prog');
Route::post('/progs/create', 'ProgsController@store')->name('store-prog');
Route::get('/progs', 'ProgsController@index')->name('index-progs');
Route::get('/progs/edit/{id}', 'ProgsController@edit')->name('edit-prog');
Route::post('/progs/edit/{id}', 'ProgsController@update')->name('update-prog');
Route::get('/progs/delete/{id}', 'ProgsControllers@delete')->name('delete-prog');