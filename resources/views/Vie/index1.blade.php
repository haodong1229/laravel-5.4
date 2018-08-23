@extends("AdminPublic.public")
@section('main')
<div style="width:100%;height:200px;background-color:yellow">这是页面主体</div>
<h1>{{$a}}</h1>
<h1>数组遍历</h1>

<table border="1px" width="300px">
	<tr>
		<th>NAME</th>
		<th>AGE</th>

	</tr>
	@foreach($arr as $row)
	<tr>
		<td>{{$row['name']}}</td>
		<td>{{$row['age']}}</td>

	</tr>
	@endforeach
</table>
<h1>显示html页面:{!!$b!!}</h1>
<h1>使用函数:{{time()}}</h1>
<h1>设置默认值:{{$user or '666'}}</h1>
@endsection
@section("title",'前台首页')