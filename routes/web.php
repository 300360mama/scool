<?php

Route::post('/article/{id}', 'ArticlesController@show');
Route::post('/items/subcategory/{id}', 'ArticlesController@index')->name("subcategory");
//Route::post('/{category}/page/{page}', 'ArticlesController@index')->name("category");
Route::post('/{category?}', 'ArticlesController@index')->name("category");

Route::get('/', 'VueController@index');
Route::get('/{category}', 'VueController@index');
Route::get('/items/{subcategory}/{id}', 'ArticlesController@index')->name("subcategory");
