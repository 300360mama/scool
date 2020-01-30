<?php
namespace App\Providers;

use App\Helpers\InfoArticle;
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
        $this->app->bind("infoarticle", function () {
            return new InfoArticle();
        });
    }
}
