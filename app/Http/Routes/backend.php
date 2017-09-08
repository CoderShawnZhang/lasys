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
 * 清理缓存
 */
Route::get('menu/clear',[
    'as' => 'backend.menu.clear',
    'uses' => 'MenuController@clear'
]);
/**
 * 菜单管理
 */
Route::resource('menu', 'MenuController');

/**
 * 用户管理
 */
Route::resource('user','UserController');

/**
 * 角色管理
 */
Route::resource('role','RoleController');

/**
 * 权限管理
 */
Route::resource('permission','PermissionController');

/**
 * 操作管理
 */
Route::resource('action','ActionController');

/**
 * 文件管理
 */
Route::get('file/index',[
   'as' => 'backend.file.index',
    'uses' => 'FileController@index'
]);
/**
 * 日记管理
 */
Route::get('log/',[
    'as' => 'backend.log.index',
    'uses' => 'LogController@index'
]);