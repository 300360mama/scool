<?php

Route::post('/article/{id}', 'ArticlesController@show');
Route::post('/items/subcategory/{id}', 'ArticlesController@index')->name("subcategory");
Route::post('/{category?}', 'ArticlesController@index')->name("category");
Route::post('/crud/show/{table}/{page?}', 'CrudController@show')->name("show");

Route::get('/', 'VueController@index');
Route::get('/{category}', 'VueController@index');
Route::get('/items/{subcategory}/{id}', 'ArticlesController@index')->name("subcategory");
Route::get('/crud/show/{table}/{page?}', 'CrudController@show')->name("show");

