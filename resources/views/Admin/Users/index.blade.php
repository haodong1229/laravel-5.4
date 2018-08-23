@extends("Admin.AdminPublic.public")
@section("admin")
<html>
<script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>

 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>会员列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div id="DataTables_Table_1_length" class="dataTables_length">
      
     </div>
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      
        <form action="/adminusers" method="get">
          搜索: <input type="text" aria-controls="DataTables_Table_1" value="{{$request['keywords'] or ''}}" name="keywords" />
          <input type="submit" value="搜索" class="btn btn-success" name="">
        </form>

     </div>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
        @foreach($user as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td class="name">{{$row->name}}</td>
          <td>{{$row->pass}}</td>
          <td>
            <form action="/adminusers/{{$row->id}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button class="btn btn-info">删除</button>
              
            </form>
            <button class="btn btn-danger del">Ajax删除</button>
            <a href="/adminusers/{{$row->id}}/edit" class="btn">修改</a>
          </td>
        </tr>
        @endforeach
     </table>
     
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {{$user->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script type="text/javascript">
   $('.del').click(function(){
      id = $(this).parents('tr').find('td:first').html();
      t = $(this).parents('tr');
      $.get("/adminusersdel",{id:id},function(data){

        if (data == 1) {
          alert('删除成功');
          t.remove();
        }else{
          alert('删除失败');
        }
      });
   });

 </script>
</html>
@endsection
@section('title','后台用户列表')