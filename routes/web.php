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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/mens',function(){
   return view('mens');
});


Route::get('/','FrontEndHomeController@getMaster')->name('frontEnd.home');

//backEnd

Route::get('/admin','AdminHomeController@getMaster')->name('admin.home');

//category
Route::get('/admin/category/create','CategoryController@create')->name('category.create');
Route::get('/admin/category','CategoryController@index')->name('category.index');
Route::post('/admin/category/store','CategoryController@store')->name('category.store');
Route::get('/admin/category/edit/{id}','CategoryController@edit')->name('category.edit');
Route::get('/admin/category/update/{id}','CategoryController@update')->name('category.update');
Route::get('/admin/category/delete/{id}','CategoryController@destroy')->name('category.delete');


//sub category controller

Route::get('/add-subcategory','subCategoryController@addSubCategory')->name('add.sub.category');
Route::get('/subcategory-manage','subCategoryController@manageSubCategory')->name('manage.sub.category');
Route::post('/subcategory-add','subCategoryController@storeSubCategory')->name('store.sub.category');
Route::get('/subcategory-delete/{id}','subCategoryController@delete')->name('delete.subcategory');
Route::get('/subcategory-edit/{id}','subCategoryController@edit')->name('edit.subcategory');
Route::post('/subcategory-edit/{id}','subCategoryController@update')->name('update.subcategory');



Auth::routes();


