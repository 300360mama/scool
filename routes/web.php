<?php

Route::get("/subcategory/{id}", 'ListArticleController@index');
Route::get("/{category}/{id}", 'FullArticleController@index');
Route::get("/{category}", 'ListArticleController@index');
Route::get("/", 'FullArticleController@index');
Route::get("/404", 'NotfoundController@notFound');

