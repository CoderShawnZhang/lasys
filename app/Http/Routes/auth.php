<?php
/**
 * 认证路由。。。
 */
Route::get('auth/login',['as'=>'auth.login','uses'=>'AuthController@getLogin']);
Route::post('auth/login','AuthController@postLogin');
Route::get('auth/logout','AuthController@getLogout');
//注册路由。。。

