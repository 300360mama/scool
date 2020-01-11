<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table = "articles";

    public function category()
    {
      return $this->belongsTo('App\Category');
    }


    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }


    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }
}
