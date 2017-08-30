<?php

namespace App\Providers;

use App\LasysClass\MenuLasys;
use Illuminate\Support\ServiceProvider;

class LasysServiceProvider extends ServiceProvider
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
        //
        $this->app->singleton('menulasys',function($app){
            $model = config('lasysmodel.models.menu');
            $menu = new $model;
            $validator = $app['validator'];
            return new MenuLasys($menu,$validator);
        });
    }
}
