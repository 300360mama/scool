<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table = "articles";


    public function category()
    {
        return $this->hasOne('App\Category');
    }


    public function subcategory()
    {
        return $this->hasOne('App\Subcategory');
    }


    public function author()
    {
        return $this->hasOne('App\Author');
    }
}
