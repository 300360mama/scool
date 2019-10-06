<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use App\Article as Article;

class FullArticleController extends ArticleController
{
    public function index(Request $request) {

        $article_id = $request->id ? $request->id : 0;
        $article = Article::find($article_id);

        return view('full_article', [
            'article'=>$article,
            "subcategories"=>$this->getSubcategories()
            ]);
    }
}
