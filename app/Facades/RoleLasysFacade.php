<?php

namespace App\Facades;
/**
 * 权限管理门面
 */

use Illuminate\Support\Facades\Facade;
class RoleLasysFacade extends  Facade
{
    public static function getFacadeAccessor()
    {
         return 'rolelasys';
    }
}