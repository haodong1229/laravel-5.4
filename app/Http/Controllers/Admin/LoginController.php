<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入数据库类
use DB;
//引入表单验证
use App\Http\Requests\UserLogin;
use App\Http\Requests\UserInsert;
//引入Hash验证
use Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //显示后台登录页面

        return view('Admin.Login.login');
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserLogin $request)
    {
        //判断用户登录账户密码
        //dd($request->all());
        //获取用户名字
        $user=$request->input('username');
        //获取用户密码
        $pw=$request->input('password');
        //通过用户名字找到密码
        $mpw=DB::table("stu")->where('username','=',''.$user.'')->value('password');
        
        if(!$mpw){
            //判断是否用户名错误
            return redirect('/login')->with('errorr','用户名有误');
        }else if(Hash::check($pw,$mpw)){
            session(['admin'=>true]);
            return redirect('/index');
        }else{
            //判断是否密码错误
            $request->flashOnly('username');
            return redirect('/login')->with('error','密码有误');
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

    public function logout(Request $request){
        $request->session()->pull('admin',true);
        return view('Admin/Login/login');
    }

    public function zhu(){
        return view('Admin/Login/zhuce');
    }

    public function ce(UserInsert $request){
        $data=$request->except('_token','repassword');
        $data['password']=Hash::make($data['password']);
        DB::table('stu')->insert($data);
        return redirect('/login');
    }
}



