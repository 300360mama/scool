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

    protected function getCategory(string $category_name) {

        $category_isset = Category::where("name", $category_name)->exists();
    
        if($category_isset) {
            $category = Category::where("name", $category_name)->get(["name", "id"]);
            $category_id = $category[0]->id;
            $category_name = $category[0]->name;      
        } else {
            $category_id = 1;
            $category_name = '';
        }

        return [
            "category_id"=>$category_id,
            "category_name"=>$category_name
        ];
    }

    protected function getLatestArticle($quantity) {
        $res = Article::orderBy("created_at","desc'")->take($quantity)->get();
        return $res;
    }

}

