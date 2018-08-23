<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Http\Requests\UserInsert;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $Request)
    {
        // echo "这是Users列表";
        //加载模板
        $k = $Request->input('keywords');
        $user = DB::table('users')->where('name','like',"%".$k."%")->paginate(3);
        return view("Admin.Users.index",['user'=>$user,'request'=>$Request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加界面
        // echo "this is add";
        return view("Admin.Users.add");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserInsert $request)
    {
        //执行添加
        // echo "这是执行添加操作";
        // var_dump($request->all());
        $data = $request->except('_token','repass');
        $data['pass'] = Hash::make($data['pass']);

        if (DB::table('users')->insert($data)) {
            return redirect('/adminusers')->with('success','数据添加成功');
        }else{
            return redirect('/adminusers/create')->with('error','数据添加失败');
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
        // echo "这是修改数据的id:".$id;
        $user = DB::table('users')->where('id','=',$id)->first();
        // var_dump($user);die;
        return view('Admin.Users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //执行修改
    public function update(Request $request, $id)
    {
        $all = $request->all();
        // var_dump($all);die;
        $data = $request->except('_token','repass','_method');
        if (DB::table('users')->where('id','=',$id)->update($data)) {
            return redirect('/adminusers')->with('success','修改成功');
        }else{
            return redirect('/adminusers')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $de = DB::table('users')->where('id','=',$id)->delete();
        if ($de) {
            return redirect('/adminusers')->with('success','删除成功');
        }else{
            return redirect('/adminusers')->with('error','删除失败');
        }
    }

    public function del(Request $request)
    {
        $id = $request->input('id');
        $res = DB::table("users")->where('id','=',$id)->delete();
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    }
}
