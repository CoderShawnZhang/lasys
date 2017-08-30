<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 * 登录路由
 */
Route::group(['namespace' => 'auth'],function(){
   require_once __DIR__ . '/Routes/auth.php';
});

/*
 * 后台路由
 */
Route::group(['namespace' => 'backend','prefix' => 'backend'],function(){
    require_once __DIR__ . '/Routes/backend.php';
});

/*
 * 前端路由
 */
Route::group(['namespace' => 'frontend'],function(){
    require_once __DIR__ . '/Routes/frontend.php';
});