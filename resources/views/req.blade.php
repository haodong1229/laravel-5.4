<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>req模板</title>
</head>
<body>
	<form action="/req" method="post">
		用户名:<input type="text" name="name"><br>
		电话:<input type="text" name="phone" value="{{old('phone')}}"><br>
		邮箱:<input type="text" name="email" value="{{old('email')}}"><br>

		{{csrf_field()}}
		<input type="submit" value="提交">

	</form>
</body>
</html>