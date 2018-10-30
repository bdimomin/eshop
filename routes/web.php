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

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::get('/','MasterController@homeContent')->name('homepage');
Route::get('/mens','MasterController@mensContent')->name('mens');
Route::get('/womens','MasterController@womensContent')->name('womens');
Route::get('/electronics','MasterController@electronics')->name('electronics');
Route::get('/contact','MasterController@contact')->name('contact');
Route::get('/singleproduct','MasterController@singleProduct')->name('singleproduct');


/* Category*/
Route::get('/category/add','CategoryController@create')->name('createCategory');
Route::post('/category/save','CategoryController@saveCategory')->name('saveCategory');
Route::get('/category/manage','CategoryController@manageCategory')->name('categoryManage');
Route::get('/category/edit/{id}','CategoryController@editCategory')->name('categoryEdit');
Route::post('/category/update','CategoryController@updateCategory')->name('updateCategory');
Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('deleteCategory');
/* Category*/


/* Manufactuere*/
Route::get('/manufacturer/add','ManufacturerController@addManufacturer')->name('addManufacturer');
Route::post('/manufacturer/save','ManufacturerController@saveManufacturer')->name('saveManufacturer');
Route::get('/manufacturer/manage','ManufacturerController@manageManufacturer')->name('manageManufacturer');
Route::get('/manufacturer/edit/{id}','ManufacturerController@editManufacturer')->name('editManufacturer');
Route::post('/manufacturer/update','ManufacturerController@updateManufacturer')->name('updateManufacturer');
Route::get('/manufacturer/delete/{id}','ManufacturerController@deleteManufacturer')->name('deleteManufacturer');
/* Manufactuere*/

/* Products*/
Route::get('/product/add','ProductController@addProduct')->name('addProduct');
Route::post('/product/save','ProductController@saveProduct')->name('saveProduct');
Route::get('/product/manage','ProductController@manageProduct')->name('manageProduct');
//Route::get('/product/edit/{id}','ManufacturerController@editManufacturer')->name('editManufacturer');
//Route::post('/product/update','ManufacturerController@updateManufacturer')->name('updateManufacturer');
//Route::get('/product/delete/{id}','ManufacturerController@deleteManufacturer')->name('deleteManufacturer');
/* Products*/


