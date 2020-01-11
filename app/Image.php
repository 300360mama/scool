<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function article()
    {
        return $this->hasMany('App\Article', "images_id");
    }
}
