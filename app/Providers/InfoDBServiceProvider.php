<?php

namespace App\Providers;

use App\Helpers\InfoDB;
use Illuminate\Support\ServiceProvider;

class InfoDBServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("infodb", function () {
            return new InfoDB();
        });
    }
}
