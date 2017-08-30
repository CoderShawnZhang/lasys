<?php
namespace App\LasysClass;

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
            $menus[''] = '所有菜单';
            $menus = $this->model->whereHide(0)->whereParentId(0)->orderBy('sort','desc')->lists('name','id')->toArray();
            $menus = $menus + $menus;
            Cache::forever(self::ALL_TOP_MENUS_CACHE,$menus);
        }
        return $menus;
    }
}