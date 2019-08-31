<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ListArticleController extends Controller
{
    public function index() {


        $articles = Article::all();
        return view('list_article', ['articles'=>$articles]);
    }
}
