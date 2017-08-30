<?php
/**
 * 自定义父类
 */
namespace App\LasysClass;

use App\Traits\Lasys\BaseLasysTrait;
use Illuminate\Validation\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * 封装自定义类所属父类
 */
abstract class Common
{
    use BaseLasysTrait;

    protected $model;

    protected $validator;

    public function __construct(Model $model,Factory $validator)
    {
        $this->model = $model;
        $this->validator = $validator;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getValidator()
    {
        return $this->validator;
    }

    public function clearCache(){

    }
}