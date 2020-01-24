<?php

$root = $_SERVER['DOCUMENT_ROOT'];

Route::get('/scool/vue', 'VueController@index');


Route::get("/scool/subcategory/{id}", 'SubcategoryController@index');
Route::get("/scool/{category}/{id}", 'FullArticleController@index');
Route::get("/scool/{category}", 'ListArticleController@index');
Route::get("/scool", 'ListArticleController@index');
Route::get("/scool/404", 'NotfoundController@notFound');


Route::post("/scool/crud/delete/{table}", "CrudController@delete");
Route::post("/scool/crud/show/{table}", "CrudController@show");
Route::get("/scool/crud/read/{table}", "CrudController@read");
Route::post("/scool/crud/update/{table}", "CrudController@update");
Route::get("/scool/crud/createView/{table}", "CrudController@createView");
Route::post("/scool/crud/create/{table}", "CrudController@create");


Route::get("/scool/crud/read/image", "UploadImageController@read");
Route::get("/scool/crud/upload/image", "UploadImageController@upload");
Route::get("/scool/crud/remove/image", "UploadImageController@delete");


