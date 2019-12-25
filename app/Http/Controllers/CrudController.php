<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CrudController extends Controller
{
    public function delete(Request $request)
    {
        if ($request->ajax() || $request->isMethod("post")) {
            $id = $request->id_row;
            $table = $request->table ? $request->table : 'articles';
            $tableModel = $this->getTableModel($table);
            $row = $tableModel->find($id);
            $res = $row->delete();

            $message = $res ? "Delete successfull" : "Delete error";
            $response = [
                "result" => $res,
                "message" => $message
            ];
            return json_encode($response);
        }

    }

    public function update(Request $request)
    {

        $table = $request->table ? $request->table : "articles";
        $res = false;
        $message = "Update failed";
        $response = [
            "result" => $res,
            "message" => $message
        ];
        $tableModel = $this->getTableModel($table)->find($request->id);
        $message = "Update error";
        $fields = $request->all();
        $res = false;

        if ($request->ajax() || $request->isMethod("post")) {
            foreach ($fields as $name => $field) {
                dump($name);
                if($tableModel->$name) {
                    $tableModel->$name = $field;
                }
            }

            $tableModel->updated_at = time();
            $isSave = $tableModel->save();

            if ($isSave) {
                $res = true;
                $message = "Update successful";
            }

            $response = [
                "result" => $res,
                "message" => $message
            ];
            return json_encode($response);
        }

        return json_encode($response);
    }

    public function create(Request $table)
    {

    }

    public function read(Request $request)
    {

        $table = $request->table ? $request->table : 'articles';
        $tableModel = $this->getTableModel($table);
        $articles = $tableModel::all()->toArray();

        return view("crud.read", [
            "values" => $articles,
            "table" => $table

        ]);
    }

    public function show(Request $request)
    {

        $table = $request->table ? $request->table : "articles";
        $listRelationships = $this->getRelationshipsTable($table);
        $relationships = [];
        $tableModel = $this->getTableModel($table);

        foreach ($listRelationships as $value) {
            $relationshipsTable = substr($value, 0, -3);
            $relationshipsTableModel = $this->getTableModel($relationshipsTable);
            $columnName = self::getRelationshipsColumnName($relationshipsTable);
            $res = $relationshipsTableModel->get(["id", $columnName])->toArray();
            $relationships[$value] = $res;
        }

        $fields = $tableModel->find($request->id_row)->toArray();

        return view("crud.update", [
            "fields" => $fields,
            "relationships" => $relationships
        ]);

    }

    /**
     * getRelationshipsTable
     *
     * @param strint $table
     *
     * @return array
     */
    private function getRelationshipsTable($table)
    {
        $rows = DB::select("SHOW COLUMNS FROM $table");
        $rows = array_map(function ($value) {
            if (substr($value->Field, -3, 3) === "_id") return $value->Field;
        }, $rows);
        $rows = array_filter($rows, function ($v) {
            if ($v) return true;
        });

        return $rows;
    }

    /**
     * getRelationshipsColumnName
     *
     * @return array
     */
    private static function getRelationshipsColumnName($table)
    {

        $list = [
            "author" => "last_name",
            "subcategory" => "name",
            "category" => "name"
        ];
        return $list[$table];
    }

    /**
     * getTableModel
     *
     * @param string $table
     *
     * @return class
     */
    private function getTableModel($table)
    {

        $table = ucfirst(strtolower($table));
        $model = "";
        switch ($table) {
            case "Author":
                $model = new \App\Author;
                break;
            case "Articles":
                $model = new \App\Article;
                break;
            case "Category":
                $model = new \App\Category;
                break;
            case "Subcategory":
                $model = new \App\Subcategory;
                break;
        };

        return $model;

    }


}
