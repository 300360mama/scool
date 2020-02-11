<?php

Route::post('/{category}/article/{id}', 'ArticlesController@show');
Route::post('/{category}', 'ArticlesController@index');
Route::post('/{category}/page/{page}', 'ArticlesController@index');
Route::post('/', 'ArticlesController@index');

Route::get('/', 'VueController@index');
Route::get('/{category}', 'VueController@index');

