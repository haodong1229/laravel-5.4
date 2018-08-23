<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//导入DB
use DB;
use A;
class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //获取数据表信息
        // $res=DB::select('select * from users');
        // dd($res);
        // echo "<pre>";
        // var_dump($res);exit;
        //加载模板 分配数据
        
        //一般语句 删除数据表
        // DB::statement('drop table stu');
        //连贯方法
        //查询所有数据
        // $data=DB::table("users")->get();
        // //获取单条数据
        // $info=DB::table("users")->where("id",'=',1)->first();
        // //获取单条结果中的某个字段
        // $username=DB::table("users")->where("id",'=',1)->value('username');
        // //获取某一列数据
        // $res=DB::table("users")->pluck("username");
        // // dd($res);
        // //分页加搜索
        // //获取搜索关键词
        // $k=$request->input('keywords');
        // $data1=DB::table("users")->where('username','like',"%".$k."%")->paginate(3);
        // return view("db",['res'=>$data1,'request'=>$request->all()]);
        //连贯插入
       // $res = DB::table('users')->insert([
       //  ['name'=>'dong','pass'=>'222'],
       //  ['name'=>'dong','pass'=>'222'],
       //  ['name'=>'dong','pass'=>'222'],
       //  ['name'=>'dong','pass'=>'222']
       // ]);
        //获取id插入数据
        // $id = DB::table('users')->insertGetid(['name'=>'asd',"pass"=>"s"]);
        // var_dump($id);

        //指定字段获取数据
        // $data = DB::table("users")->select('name as n','id as i','pass as p')->get();
        // var_dump($data);
        //排序
        // $data = DB::table('users')->orderBy('id','desc')->get();
        // var_dump($data);
        //表关联
        // $data = DB::table('users')->join("good","users.id","=","good.cid")->select('good.id as gid','good.good as gname','users.name as uname','users.id as uid')->get();


        // $data2=DB::table("cates")->join("shops","cates.id",'=','shops.cate_id')->select("cates.id as cid","cates.name as cname","shops.id as sid","shops.name as sname","shops.pic","shops.num")->get();


        // var_dump($data);
        //获取数据总条数
        // $total = DB::table('users')->count();
        // var_dump($total);

        // $max = DB::table('users')->max('name');

        // $avg = DB::table('users')->avg('id');

        // var_dump($avg);
        
        // $data = DB::table('users')->whereIn('id',[6,1   ])->get();
        // var_dump($data);
        //加载模板 
        // return view('db1');
        // fun();
        // $a = new A();
        // $Ucpaas = new Ucpaas();
        // $a->sendphone();
        // var_dump($Ucpaas);
        sendsphone(18475830898);
        // sendsphone();
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
    public function store(Request $request)
    {
        //
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
