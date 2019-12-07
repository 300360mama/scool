<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 

class CrudController extends Controller
{
    public function delete(Request $request) {
    
        if($request->isMethod("post")) {  
        }

        if($request->ajax()) {

            $id = $request->id_row;

            $row = DB::table($table)->where("id", $id)->get();
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

    public function read(Request $request) {

        $table = $request->table ?  $request->table : 'articles';

        $tableModel = $this->getTableModel($table);
        dump($tableModel);
        $articles = $tableModel::all()->toArray();
       
        return view("crud.read", [
            "values"=>$articles,
            "table"=>"articles"
        
        ]);
    }

    public function show(Request $request) {
 
        $table = $request->table ? $request->table : "articles";
        $listRelationships = $this->getRelationshipsTable($table);
        
        $relationships = [];
        $tableModel = $this->getTableModel($table);

        $article = $tableModel->find($request->id_row)->toArray();

        
        dump($relationships);
    
        return view("crud.update", [
            "fields"=> $article,
            "relationships"=> $relationships
        ]);

    }

    /**
     * getRelationshipsTable
     *
     * @param  strint $table
     *
     * @return array
     */
    private function getRelationshipsTable($table) {
        $rows = DB::select("SHOW COLUMNS FROM $table");
        $rows = array_map(function($value){
            if(substr($value->Field, -3, 3) === "_id") return $value->Field;
        }, $rows);
        $rows = array_filter($rows, function($v){
            if($v) return true;
        });

        return $rows;
    }

    /**
     * getRelationshipsColumnName
     *
     * @return array
     */
    private static function getRelationshipsColumnName(){
        return [
            "author"=>"last_name",
            "subcategory"=>"name",
            "category"=>"name"
        ];
    }

    /**
     * getTableModel
     *
     * @param  string $table
     *
     * @return class
     */
    private function getTableModel($table) {

        $table =  ucfirst(strtolower($table));
        $model = "";
        switch($table) {
            case "Author": 
                $model = new \App\Author;
            break;
            case "Articles": 
                $model = new \App\Article;
            break;
        };

        return $model;

    }

    
}
