<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;

class ModelFactory extends Model
{

    public static function getModel($table_name) {
        $models = [
            "articles"=> "Article"
        ];

        $model = null;

        if(array_key_exists($table_name, $models)) {
            $model = new $model[$table_name];
        }

        return $model;
    }
}
