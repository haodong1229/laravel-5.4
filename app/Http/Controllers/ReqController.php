<?php

namespace App\Http\Controllers;
//导入请求类
use Illuminate\Http\Request;

class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Request $request  用Reuest 请求类约束请求对象 $request
    public function index(Request $request)
    {
        // echo "<pre>";
        // var_dump($request);
        //获取请求路径
        $path=$request->path();
        //获取完整的url地址
        $url=$request->url();
        //获取请求方式
        $method=$request->method();
        //检测请求方式
        $res=$request->isMethod('post');
        //获取所有参数
        // $allparam=$request->all();
        //获取单个参数
        $name=$request->input("name");
        //检测参数是否存在
        $r=$request->has('sex');
        //设置默认值
        $rr=$request->input('sex','w');
        //提取部门参数
        //提取指定的参数
        $data=$request->only(['name','age']);
        //把某个参数之外的所有参数获取
        $data1=$request->except(['name']);
        //dd() 打印数据的同时 终止脚本代码
        dd($data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view("req");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取所有参数
        // $allparam=$request->all();
        // //去除某个参数
        // $data=$request->except(['_token']);
        // dd($data);
        // echo "这是执行添加操作";
        //获取用户名
        $name=$request->input('name');
        //将所有的参数写在闪存里
        // $request->flash();
        //将部分参数写在闪存里
        // $request->flashOnly('email');
        //除去某些参数写在闪存里
        // $request->flashExcept('email');
        //判断
        if($name==null){
            // echo "1";
            //阻止表单提交 将所有的参数写入到闪存里
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
