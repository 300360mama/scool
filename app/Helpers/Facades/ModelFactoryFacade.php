<?php

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class ModelFactoryFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return "modelfactory";
    }
}
