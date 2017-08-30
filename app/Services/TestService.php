<?php
/**
 *  定义服务类
 */
namespace App\Services;

use App\Contracts\TestContract;

class TestService implements TestContract
{
    public function createSuperMan($controller)
    {
        echo 'Call Me From TestServiceProvider In'.$controller;
    }
}