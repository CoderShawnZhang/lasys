<?php

namespace App\Presenters;

use \MenuLasys;

class MenuPresenter extends CommonPresenter
{
    /**
     * 新增菜单按钮
     */
    public function getHandleParams()
    {
        return [
            [
                'route' => 'backend.menu.create',
                'icon'  => 'plus',
                'class' => 'success',
                'title' => '新增',
            ],
            [
                'route' => 'backend.menu.clear',
                'icon'  => 'plus',
                'class' => 'error',
                'title' => '清理缓存',
            ]
        ];
    }

    public function getSearchParams(){
        return [
            'route'  => 'backend.menu.search',
            'inputs' =>
                [
                    [
                        'type'    =>  'select',
                        'name'    =>  'parent_id',
                        'options' =>  MenuLasys::getAllTopMenus(),
                    ],
                    [
                        'type'    =>  'date',
                        'name'    =>  'created_at',
                    ],
                ]
        ];
    }
}