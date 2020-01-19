<?php

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class DBFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return "infodb";
    }
}
