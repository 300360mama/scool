<?php

Route::post('/{category}/article/{id}', 'ArticlesController@show');
Route::post('/{category}/page/{page}', 'ArticlesController@show');
Route::post('/items/{subcategory}/{id}', 'ArticlesController@show');
Route::post('/{category?}', 'ArticlesController@index');

Route::get('/', 'VueController@index');
Route::get('/{category}', 'VueController@index');
