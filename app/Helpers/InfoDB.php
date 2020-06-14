<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class InfoDB extends DB
{

    /**
     * getRelationshipsTable
     *
     * @param strint $table
     *
     * @return array
     */
    public static function getRelationshipsTable($table)
    {
        $rows = DB::select("SHOW COLUMNS FROM $table");
        $rows = array_map(function ($value) {
            if (substr($value->Field, -3, 3) === "_id") {
                return $value->Field;
            }

        }, $rows);
        $rows = array_filter($rows, function ($v) {
            if ($v) {
                return true;
            }

        });

        return $rows;
    }

    /**
     * getRelationshipsColumnName
     *
     * @return array
     */
    public static function getRelationshipsColumnName($table)
    {

        $list = [
            "author" => "last_name",
            "subcategory" => "name",
            "category" => "name",
            "image" => "path_to_image",
        ];
        return $list[$table];
    }

    /**
     * getModel
     *
     * @param string $table
     *
     * @return class
     */
    public static function getModel($table)
    {

        $table = ucfirst(strtolower($table));
        $model = null;

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
            case "Images":
                $model = new \App\Image;
                break;
        };

        return $model;
    }

    public static function getColumnName($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);
    }

    public static function getRelationshipsValue($table)
    {

        $listRelationships = self::getRelationshipsTable($table);
        $relationships = [];

        foreach ($listRelationships as $value) {
            $relationshipsTable = substr($value, 0, -3);
            $relationshipsTableModel = InfoDB::getModel($relationshipsTable);
            $columnName = InfoDB::getRelationshipsColumnName($relationshipsTable);
            $res = $relationshipsTableModel->get(["id", $columnName])->toArray();
            $relationships[$value] = $res;
        }

        return $relationships;
    }

    public static function getTableList()
    {
        $tables = [
            "articles",
            "authors",
            "categories",
            "images",
            "subcategories",
        ];

        return $tables;
    }

}
