<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use App\Article as Article;



class ListArticleController extends ArticleController {

    public function index(Request $request) {

        $category_name = $request->category ? $request->category : "items";
        $category = $this->getCategory($category_name);

        $articles = Article::where('category_id', $category["category_id"])->get();
        $articles = $articles ? $articles : [];

        return view('list_article', [
            'articles'=> $articles,
            'category'=>$category,
            "subcategories"=>$this->getSubcategories(),
            "latest_post"=>$this->getLatestArticle(4)
        ]);
  
    }
}
