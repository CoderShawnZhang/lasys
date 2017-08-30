<?php
/**
 * 后台首页
 */
Route::get('index/',[
    'as' => 'backend.index.index',
    'uses' => 'IndexController@index'
]);

/**
 * 菜单管理
 */
Route::resource('menu', 'MenuController');
