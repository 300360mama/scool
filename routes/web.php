<?php

Route::post("/crud/delete/articles", "ArticleController@delete");
Route::post("/crud/show/articles", "ArticleController@show");
Route::get("/crud/read/articles", "ArticleController@read");
Route::post("/crud/update/articles", "ArticleController@update");
Route::get("/crud", "ArticleController@read");
Route::get("/subcategory/{id}", 'SubcategoryController@index');
Route::get("/{category}/{id}", 'FullArticleController@index');
Route::get("/{category}", 'ListArticleController@index');
Route::get("/", 'FullArticleController@index');
Route::get("/404", 'NotfoundController@notFound');





