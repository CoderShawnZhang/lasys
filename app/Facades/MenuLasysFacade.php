<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 17/8/28
 * Time: 下午4:48
 */
namespace App\Facades;

use Illuminate\Support\Facades\Facade;
class MenuLasysFacade extends Facade
{
    /**
     * 从容器中解析出 menulasys类 获取对象
     */
    protected static function getFacadeAccessor()
    {
        return 'menulasys';
    }
}