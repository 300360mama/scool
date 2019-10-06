<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article as Article;

class HomeController extends ArticleController
{
    public function index(Request $request) {



        $article = Article::find(1);
        $category = $this->getCategory($request);
        


        return view('full_article', [
            'article'=>$article,
            "subcategories" => $this->getSubcategories()
            ]);
    }
}
