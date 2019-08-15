<?php

Route::get("scool/{category}", 'ListArticleController@index');
Route::get("scool/{category}/{id}", 'FullArticleController@index');
Route::get("scool/", 'HomeController@index');
Route::get("scool/404", 'NotfoundController@notFound');
