<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory as Subcategory;
use App\Category as Category;

class ArticleController extends Controller {
    

    protected function getSubcategories() {
        return Subcategory::all();
    }

    protected function getCategory(Request $request) {
        $request_category = $request->category ? $request->category : '';
        $category = Category::where('name', $request_category)->get();
 
        if($category) {
            $category_id = $category[0]->id;
            $category_name = $category[0]->name;
        } else {
            $category_id = 0;
            $category_name = '';
        }

        return [
            "category_id"=>$category_id,
            "category_name"=>$category_name
        ];
    }

}

