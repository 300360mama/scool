<?php
Route::get("/{category}", 'ListArticleController@index');
Route::get("/{category}/{id}", 'FullArticleController@index');
Route::get("/", 'HomeController@index');
Route::get("/404", 'NotfoundController@notFound');

