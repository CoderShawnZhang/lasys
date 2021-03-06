<?php
namespace App\LasysClass;

use App\Presenters\MainPresenter;
use Cache;

class MenuLasys extends Common
{
    const ALL_DISPLAY_MENUS_CACHE = 'all_display_menus_array_cache';

    const ALL_TOP_MENUS_CACHE = 'all_top_menus_cache';
    public function test(){
        return 111;
    }

    /**
     * 获取所有显示菜单
     */
    public function getAllDisplayMenus(){
        $menus = Cache::get(self::ALL_DISPLAY_MENUS_CACHE);

        if(empty($menus)){
            $menus = $this->model->whereHide(0)->orderBy('sort','asc')->get()->toArray();
            Cache::forever(self::ALL_DISPLAY_MENUS_CACHE,$menus);//写入缓存
        }
        return $menus;
    }

    /**
     * 获取所有顶级显示菜单
     *
     */
    public function getAllTopMenus()
    {
        $menus = Cache::get(self::ALL_TOP_MENUS_CACHE);
        if(empty($menus)){
            $menu[''] = '所有菜单';
            $menus = $this->model->whereHide(0)->whereParentId(0)->orderBy('sort','desc')->lists('name','id')->toArray();
            $menus = $menu + $menus;
            Cache::forever(self::ALL_TOP_MENUS_CACHE,$menus);
        }
        return $menus;
    }

    /**
     * 清除所有缓存
     */
    public function clearCache()
    {
        Cache::forget(self::ALL_DISPLAY_MENUS_CACHE);
        Cache::forget(self::ALL_TOP_MENUS_CACHE);
        Cache::forget(MainPresenter::SIDEBAR_MENUS_CACHE);
        Cache::forget(MainPresenter::BREADCRUMBS_MENUS_CACHE);
    }
}