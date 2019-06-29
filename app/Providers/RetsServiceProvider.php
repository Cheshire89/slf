<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RetsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('rets', function(){
            return new \App\Helpers\Rets;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){

    }
}
