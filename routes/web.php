<?php

Route::post('/article/{id}', 'ArticlesController@show');
Route::post('/items/subcategory/{id}', 'ArticlesController@index')->name("subcategory");
Route::post('/{category?}', 'ArticlesController@index')->name("category");
Route::post('/crud/show/{table}/{page?}', 'CrudController@show')->name("show");
Route::post('/crud/all', 'CrudController@index')->name("all");


Route::get('/scool', 'VueController@index');
Route::get('/sool/{category}', 'VueController@index');
Route::get('/sool/items/{subcategory}/{id}', 'ArticlesController@index')->name("subcategory");
Route::get('/sool/crud/show/{table}/{page?}', 'CrudController@show')->name("show");
Route::get('/sool/crud/all', 'CrudController@index')->name("all");

