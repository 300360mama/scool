<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function delete(Request $request) {
    
        if($request->isMethod("post")) {  
        }

        if($request->ajax()) {

            $id = $request->id_row;

            $row = Article::where("id", $id);
            $res = $row->delete();
            $response = [
                "result"=>$res,
                "remove"=>"adsa"
            ]; 
            return json_encode($response);   
        }
        
    }

    public function update(Request $request) {

        $res = [
            "result"=> false
        ];

        if($request->ajax()) {

            $article = Article::find($request->id);
            $article->content_article = $request->content_article;
            $article->title_article = $request->title_article;
            $article->category_id = $request->category_id;
            $article->author_id = $request->author_id;
            $article->subcategory_id = $request->subcategory_id;
            $article->updated_at = time();
            $isSave = $article->save();
           
            if($isSave) {
                $res  = [
                    "result"=> true
                ];
            }
        }
    
        
        return json_encode($res);
    }

    public function create(array $list_rows) {}

    public function read() {
        $articles = Article::all()->toArray();
       
        return view("crud.read", [
            "values"=>$articles,
            "table"=>"articles"
        
        ]);
    }

    public function show(Request $request) {

        $relationships = [];
        $authors = Author::get(["id", "last_name"])->toArray();
        $subcategories = Subcategory::get(["id", "name"])->toArray();
        $categories = Category::get(["id", "name"])->toArray();

        $relationships["category_id"] = $categories;
        $relationships["subcategory_id"] = $subcategories;
        $relationships["author_id"] = $authors;
        $articles = Article::where("id", $request->id_row)->get()->toArray();
     
        return view("crud.update", [
            "fields"=> $articles[0],
            "relationships"=> $relationships
        ]);

    }
}
