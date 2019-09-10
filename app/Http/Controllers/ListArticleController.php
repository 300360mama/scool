<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ListArticleController extends Controller
{
    public function index() {


    
        $categories = Category::where('name', 'Items')->get();

        foreach($categories as $category) {
            print_r($category->article->id);
        }
        
        
    }
}
