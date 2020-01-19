<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{


    private $tableName = "images";
    public function upload(Request $request)
    {

        $path = $request->file("image");

        dump($path);
    }

    public function add(Request $request) {

    }

    public function read(Request $request)
    {

        $table = $this->tableName;
        $tableModel = $this->getTableModel($table);

        $fields = $tableModel::all()->toArray();

        return view("crud.read", [
            "values" => $fields,
            "table" => $table

        ]);
    }
}
