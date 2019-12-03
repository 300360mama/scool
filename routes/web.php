<?php

Route::post("/crud/delete/{table}", "CrudController@delete");
Route::post("/crud/show/{table}", "CrudController@show");
Route::get("/crud/read/{tabel}", "CrudController@read");
Route::post("/crud/update/{table}", "CrudController@update");
Route::get("/crud", "CrudController@read");
Route::get("/subcategory/{id}", 'SubcategoryController@index');
Route::get("/{category}/{id}", 'FullArticleController@index');
Route::get("/{category}", 'ListArticleController@index');
Route::get("/", 'FullArticleController@index');
Route::get("/404", 'NotfoundController@notFound');





