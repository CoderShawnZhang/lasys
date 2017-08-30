<?php

namespace App\Providers;

use App\LasysClass\MenuLasys;
use App\LasysClass\RoleLasys;
use App\LasysClass\UserLasys;
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
        /*
         * 注册菜单组件
         */
        $this->registerMenuLasys();

        /*
         * 注册用户权限组件
         */
        $this->registerRoleLasys();

        /*
         * 注册用户组件
         */
        $this->registerUserLasys();

    }

    private function registerMenuLasys(){
        $this->app->singleton('menulasys',function($app){
            $model = config('lasysmodel.models.menu');
            $menu = new $model;
            $validator = $app['validator'];
            return new MenuLasys($menu,$validator);
        });
    }

    private function registerRoleLasys(){
        $this->app->singleton('rolelasys',function($app){
            $model = config('lasysmodel.models.role');
            $role = new $model;
            $validator = $app['validator'];
            return new RoleLasys($role,$validator);
        });
    }

    private function registerUserLasys(){
        $this->app->singleton('userlasys',function($app){
            $model = config();
            $user = new $model;
            $validator = $app['validator'];
            return new UserLasys($user,$validator);
        });
    }
}
