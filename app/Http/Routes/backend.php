<?php
Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    return redirect()->route('backend.index.index');
    //
});
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

/**
 * 日记管理
 */
Route::get('log/',[
    'as' => 'backend.log.index',
    'uses' => 'LogController@index'
]);