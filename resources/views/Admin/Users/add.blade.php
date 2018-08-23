@extends("Admin.AdminPublic.public")
@section("admin")
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>会员添加</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/adminusers" method="post"> 
     
      {{csrf_field()}}
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <div class="mws-form-message error">
          {{$error}} 
          </div>
          @endforeach
        </ul>
      </div>
      @endif
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">用户名</label> 
       <div class="mws-form-item"> 
        <input type="text" value="{{old('name')}}" name="name" class="small" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">密码</label> 
       <div class="mws-form-item"> 
        <input type="text" name="pass" class="medium" /> 
       </div>
      </div>
      <div class="mws-form-row"> 
       <label class="mws-form-label">重复密码</label> 
       <div class="mws-form-item"> 
        <input type="text" name="repass" class="medium" /> 
       </div>
      </div>

      <div class="mws-form-row"> 
       <label class="mws-form-label">邮件</label> 
       <div class="mws-form-item"> 
        <input type="text" value="{{old('email')}}" name="email" class="large" /> 
       </div> 
      </div> 
     
      </div> 
     </div> 
     <div class="mws-button-row"> 
      <input type="submit" value="Submit" class="btn btn-danger" /> 
      <input type="reset" value="Reset" class="btn " /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','后台用户添加')