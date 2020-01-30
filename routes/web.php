<?php

Route::post('/{category}', 'ArticlesController@index');
Route::post('/', 'ArticlesController@index');

Route::get('/', 'VueController@index');
