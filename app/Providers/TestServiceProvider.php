<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TestService;
use App\Facades\Test;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    //就在这里注册 Test 类
    public function register(){
        $this->app->singleton('test',function(){
           return new Test;
        });

        $this->app->bind('App\Contracts\TestContract',function(){
           return new TestService();
        });
    }

}