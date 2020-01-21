<?php

namespace App\Http\Controllers;

use App\Http\COntrollers\UploadImageController as UploadImg;
use Illuminate\Http\Request;
use InfoDB;

class CrudController extends Controller
{

    private $articles_imgs_dir = "./image/articles/";
    private $images_extensiion = [
        "jpg",
        "png",
    ];
    public function delete(Request $request)
    {
        if ($request->ajax() || $request->isMethod("post")) {
            $id = $request->id_row;
            $table = $request->table ? $request->table : 'articles';
            $tableModel = InfoDB::getTableModel($table);
            $row = $tableModel->find($id);
            $res = $row->delete();

            $message = $res ? "Delete successfull" : "Delete error";
            $response = [
                "result" => $res,
                "message" => $message,
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
            "message" => $message,
        ];
        $tableModel = InfoDB::getTableModel($table)->find($request->id);
        $message = "Update error";
        $fields = $request->all();
        $res = false;

        if ($request->ajax() || $request->isMethod("post")) {
            foreach ($fields as $name => $field) {
                if ($tableModel->$name) {
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
                "message" => $message,
            ];
            return json_encode($response);
        }

        return json_encode($response);
    }

    public function create(Request $request)
    {

        if ($request->ajax() || $request->isMethod("post")) {
            $table = $request->table ? $request->table : "articles";
            $columns = InfoDB::getColumnName($table);
            $tableModel = InfoDB::getTableModel($table);
            $fields = $request->all();
            $res = false;

            $message = "Create failed";

            foreach ($fields as $name => $field) {
                if (!in_array($name, $columns)) {
                    continue;
                }

                if ($name === "image") {
                    $uploadImg = new UploadImg();
                    $uploadImg->upload($request);
                }
                $tableModel->$name = $request->$name;
            }

            $tableModel->created_at = time();
            $tableModel->updated_at = time();

            $isSave = $tableModel->save();

            if ($isSave) {
                $res = true;
                $message = "Create successful";
            }

            $response = [
                "result" => $res,
                "message" => $message,
            ];

            return json_encode($response);
        }
    }

    public function read(Request $request)
    {

        $table = $request->table ? $request->table : 'articles';
        $tableModel = InfoDB::getTableModel($table);

        $fields = $tableModel::all()->toArray();

        return view("crud.read", [
            "values" => $fields,
            "table" => $table,

        ]);
    }

    public function show(Request $request)
    {

        $table = $request->table ? $request->table : "articles";

        $relationships = InfoDB::getRelationshipsValue($table);

        $tableModel = InfoDB::getTableModel($table);

        $fields = $tableModel->find($request->id_row)->toArray();

        return view("crud.update", [
            "fields" => $fields,
            "relationships" => $relationships,
        ]);
    }

    public function createView(Request $request)
    {
        $table = $request->table ? $request->table : "articles";
        $fields = InfoDB::getColumnName($table);
        $relationships = InfoDB::getRelationshipsValue($table);

        return view("crud.create", [
            "table" => $table,
            "fields" => $fields,
            "relationships" => $relationships,
        ]);
    }
}
