<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use App\Article as Article;



class ListArticleController extends ArticleController {

    public function index(Request $request) {

        $category = $this->getCategory($request);
        $articles = Article::where('category_id', $category["category_id"])->get();
        $articles = $articles ? $articles : [];

        return view('list_article', [
            'articles'=> $articles,
            'category_name'=>$category["category_name"],
            "subcategories"=>$this->getSubcategories()
        ]);
  
    }
}
