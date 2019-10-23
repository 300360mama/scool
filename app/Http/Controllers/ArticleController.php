<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory as Subcategory;
use App\Category as Category;
use App\Article as Article; 

class ArticleController extends Controller {
    
    
    protected function getSubcategories() {
        return Subcategory::all();
    }

    protected function getCategoryId(string $category_name) {

        $category_isset = Category::where("name", $category_name)->exists();

        if($category_isset) {
            $category_id = Category::where("name", $category_name)->get(["id"]);
            return $category_id[0]->id;
        } 
        return 1;
    }

    protected function getLatestArticle($quantity) {
        $res = Article::orderBy("created_at","desc'")->take($quantity)->get();
        return $res;
    }

    protected function getLikeArticle() {
        $article_count = count(Article::get(["id"]));
        $quantity_like_article = 3;
        $like_article_list = [];

        while (count($like_article_list) < $quantity_like_article) {
            $rand_id = mt_rand(1, $article_count);
            if(in_array($rand_id, $like_article_list)) continue;
            $like_article_list[] = $rand_id;
        }

        $articles = Article::whereIn("id", $like_article_list)->get();
        return $articles;

    }

}

