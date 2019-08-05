<?php

Route::get("/games", 'GamesController@index');
Route::get("/interesting", 'InterestingController@index');
Route::get("/preschooler", 'PreschoolerController@index');
Route::get("/items", 'ItemsController@index');
Route::get("/", 'HomeController@index');
Route::get("/404", 'NotfoundController@notFound');
