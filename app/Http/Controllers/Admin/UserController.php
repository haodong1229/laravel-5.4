<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //方法index
    public function index(){
    	echo "这是会员模块列表";
    }

    //添加方法
    public function add(){
    	echo "这是会员模块的添加方法";
    }

    //删除方法
    public function delete($id){
    	echo "这是删除数据的id".$id;
    }

    //详情方法
    public function info(){
    	echo "这是会员详情";
    }

    //index1
    public function index1(){
    	echo "index1";
    }
    public function index2(){
    	echo "index2";
    }

}
