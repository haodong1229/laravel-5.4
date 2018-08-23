<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>db模板</title>
</head>
<body>
	<center>
		<form action="/db" method="get">
			搜索:<input type="text" name="keywords">
			<input type="submit" value="搜索">
		</form>
		<table border="1px" width="400px">
			<tr>
				<th>ID</th>
				<th>USERNAME</th>
				<th>EMAIL</th>

			</tr>

			@foreach($res as $row)
			<tr>
				<td>{{$row->id}}</td>
				<td>{{$row->username}}</td>
				<td>{{$row->email}}</td>
			</tr>
			@endforeach
		</table>
		{{$res->appends($request)->render()}}
	</center>
</body>
</html>