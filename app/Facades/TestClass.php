<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 17/8/28
 * Time: 上午9:10
 */
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class TestClass extends Facade
{
    //getFacadeAccessor 是从容器解析 test.然后Facade基类使用魔术方法__callStatic()从你的门面中调用解析对象
    protected static function getFacadeAccessor()
    {
        return 'test';//指向test类。具体操作由这个类完成。
        //test 这个类被 ServiceProvider 注册过
    }
}