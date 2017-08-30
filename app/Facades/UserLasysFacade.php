<?php
/**
 *
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
class UserLasysFacade extends  Facade
{
    public static function getFacadeAccessor()
    {
        return 'userlasys';
    }
}