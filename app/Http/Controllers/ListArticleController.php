<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use App\Article as Article;



class ListArticleController extends ArticleController {

    public function index(Request $request) {

        $category_name = $request->category ? $request->category : "items";
        $category_id = $this->getCategoryId($category_name);

        $articles = Article::where('category_id', $category_id)->get();
        $articles = $articles ? $articles : [];

        $like_articles = $this->getLikeArticle();
        return view('list_article', [
            'articles'=> $articles,
            "subcategories"=>$this->getSubcategories(),
            "latest_post"=>$this->getLatestArticle(4),
            "like_articles"=>$like_articles
        ]);
  
    }
}
