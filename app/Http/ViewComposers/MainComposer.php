<?php

namespace App\Http\ViewComposers;
/**
 * 将数据绑定到视图
 */
use MenuLasys;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class MainComposer
{
    public function compose(View $view)
    {
        $route = Route::currentRouteName();
        $menus = MenuLasys::getAllDisplayMenus();
        $title = $this->getPageDescriptionArrayByMenus($menus);
        $view->with(compact('menus','route','title'));
    }

    private function getPageDescriptionArrayByMenus($menus)
    {
        $arr = [];
        foreach($menus as $menu){
            $arr[$menu['route']]['name'] = $menu['name'];
            $arr[$menu['route']]['description'] = $menu['description'];
        }

        return $arr;
    }
}