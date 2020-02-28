<?php

Route::post('/article/{id}', 'ArticlesController@show');
Route::post('/{category}/page/{page}', 'ArticlesController@index');
Route::post('/items/{subcategory}/{id}', 'ArticlesController@index');
Route::post('/{category?}', 'ArticlesController@index');

Route::get('/', 'VueController@index');
Route::get('/{category}', 'VueController@index');
