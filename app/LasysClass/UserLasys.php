<?php

namespace App\LasysClass;
use App\LasysClass\Common;
use Cache;

class UserLasys extends Common{

    const USER_MENU_PERMISSIONS_CACHE = 'user_menu_permissions_cache';

    public function getUserMenusPermissionsByUserModel($user){
        $routes = Cache::get(self::USER_MENU_PERMISSIONS_CACHE . $user->id);

        if(empty($routes)){

            $roles = $user->roles;

            $permissions = [];
            foreach ($roles as $key => $role) {
                $permissions[] = $role->perms;
            }

            $menus = [];
            foreach ($permissions as $permission) {
                foreach ($permission as $item) {
                    if($item->type != 'menu'){
                        continue;
                    }
                    $menus[] = $item->menus->toArray();
                }
            }

            foreach ($menus as $menu) {
                foreach ($menu as $value) {
                    $routes[] = $value['route'];
                }
            }

            if($routes){
                $routes = array_unique($routes);
            }

            Cache::forever(self::USER_MENU_PERMISSIONS_CACHE . $user->id, $routes);
        }

        return $routes;
    }
}