<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/games", 'GamesController@index');
Route::get("/interesting", 'InterestingController@index');
Route::get("/preschooler", 'PreschoolerController@index');
Route::get("/items", 'ItemsController@index');
Route::get("/", 'HomeController@index');

