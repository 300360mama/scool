<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use App\Article as Article;
use App\Category as Category;

class ListArticleController extends Controller {
    public function index(Request $request) {


        $request_category = $request->category ? $request->category : '';
        $category = Category::where('name', $request_category)->get();

        if($category) {
            $category_id = $category[0]->id;
            $category_name = $category[0]->name;
        } else {
            $category_id = [];
            $category_name = [];
        }

        $articles = Article::where('category_id', $category_id)->get();
        $articles = $articles ? $articles : [];

        return view('list_article', ['articles'=> $articles, 'category_name'=>$category_name]);
  
    }
}
