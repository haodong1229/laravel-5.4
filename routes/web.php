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

Route::resource("/login","Admin\LoginController");

Route::resource("/u","Admin\UsersController");

Route::get("/logout","Admin\LoginController@logout");

Route::get("/zhu","Admin\LoginController@zhu");

Route::post("/ce","Admin\LoginController@ce");

Route::group(['middleware'=>'login'],function(){

	Route::resource("/index","Admin\AdminController");
	Route::get("/form","Admin\AdminController@form");

});


Route::resource("/r","ReqController");

Route::resource("/f","FileController");

Route::resource("/v","Viecontroller");

Route::resource("/d","UsersController");
