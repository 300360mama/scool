<?php

Route::get("/subcategory/{id}", 'SubcategoryController@index');
Route::get("/{category}/{id}", 'FullArticleController@index');
Route::get("/{category}", 'ListArticleController@index');
Route::get("/", 'FullArticleController@index');
Route::get("/404", 'NotfoundController@notFound');
Route::get("/crud/read/articles", "ArticleController@read");
Route::post("/crud/delete/articles", "ArticleController@delete");
Route::get("/crud", "ArticleController@read");

