<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    private $main, $userInfo, $menu, $user, $role, $permission;
    public function __construct()
    {
        $this->main = [
            'backend.layout.menu',
            'backend.layout.breadcrumbs',
        ];

        $this->userInfo = [
            'backend.layout.menu',
            'backend.layout.header',
            'backend.user.profile'
        ];
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer($this->userInfo, function ($view) {
            $userInfo = \Auth::user();
            $view->with(compact('userInfo'));
        });

        view()->composer($this->main, 'App\Http\ViewComposers\MainComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
