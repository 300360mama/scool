<?php

Route::get("scool/games", 'GamesController@index');
Route::get("scool/interesting", 'InterestingController@index');
Route::get("scool/preschooler", 'PreschoolerController@index');
Route::get("scool/items", 'ItemsController@index');
Route::get("scool/", 'HomeController@index');
Route::get("scool/404", 'NotfoundController@notFound');
