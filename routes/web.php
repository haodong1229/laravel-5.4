<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//请求
Route::resource("/req","ReqController");
//文件上传 cookie 设置和读取 响应
Route::resource("/file","FileController");
//视图
Route::resource("/vie","VieController");
//搭建后台
Route::resource("/admin","Admin\AdminController");
//后台用户模块
Route::resource("/adminusers","Admin\UsersController");
//ajax删除
Route::get("/adminusersdel","Admin\UsersController@del");
//数据库
Route::resource("/db","DbController");
