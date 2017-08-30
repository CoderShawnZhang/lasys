<?php
/**
 *
 */

namespace App\LasysClass;

use PermissionRepository;

class RoleLasys extends Common
{
    public function getTypeGroupPermissionsByRoleModel($role)
    {
        $data = [];
        $permissions = PermissionRepository::all()->toArray();
        $rolePermission = $role->perms()->lists('id')->toArray();

        foreach ($permissions as $key => $permission){
            $data[$key]['id']    =  $permissions['id'];
            $data[$key]['pId']   =  $permissions['type'];
            $data[$key]['name']  =  $permissions['display_name'] . '(' . $permission['name'] . ')';
            $data[$key]['open']  =  true;

            in_array($permission['id'], $rolePermission) && $data[$key]['checked'] = true;
        }

        foreach(config('lasys.permission_type') as $key => $item){
            $arr         = [];
            $arr['id']   =  $key;
            $arr['pId']  =  0;
            $arr['name'] =  $item;
            $arr['open'] =  true;
            array_push($data,$arr);
        }

        $arr = [];
        $arr['id']   = 0;
        $arr['pId']  = '';
        $arr['name'] = '全部权限';
        $arr['open'] = true;
        array_push($data,$arr);

        return $data;
    }
}