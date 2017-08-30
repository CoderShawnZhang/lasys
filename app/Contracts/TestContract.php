<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 17/8/28
 * Time: 上午9:34
 */
namespace App\Contracts;

interface TestContract
{
    public function createSuperMan($controller);
}


/*
1:定义契约
2:定义服务
3:创建服务提供者 php artisan make:provider TestServiceProvider
4:注册服务容器 App\Providers\TestServiceProvider::class,
5:在控制器里使用
    protected $test;
    public function __construct(TestContract $test){
        $this->test = $test;
    }
    public function index(){
        $this->test->callMe('TestController);
    }
*/

/*
 * 关于laravel门面和服务提供者使用的一点见解
 *
 * 门面为应用的服务容器中的绑定类提供了一个“静态”接口。
 * Laravel 内置了很多门面，你可能在不知道的情况下正在使用它们。Laravel 的门面作为服务容器中的底层类的“静态代理”，
 * 相比于传统静态方法，在维护时能够提供更加易于测试、更加灵活的、简明且富有表现力的语法。
 * 面就是一个提供访问容器中对象的类
 */