<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article as Article;

class SubcategoryController extends ArticleController
{
    public function index(Request $request) {

        $subcategory_id = $request->id ? $request->id : 1;

        $articles = Article::where('subcategory_id', $subcategory_id)->orderBy("created_at","desc'")->get();
        $articles = $articles ? $articles : [];

        $this->getLikeArticle();

        return view('list_article', [
            'articles'=> $articles,
            "subcategories"=>$this->getSubcategories(),
            "latest_post"=>$this->getLatestArticle(4)
        ]);
  
    }
}
