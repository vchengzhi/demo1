<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改</title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
</head>

<body>
修改
<form action="/tiezi/30" method="post" enctype="multipart/form-data">
	<input type="text" name="">
	{{csrf_field()}}
	{{method_field('PUT')}}
	<button>提交</button>
</form>
删除
<form action="/tiezi/30" method="post" enctype="multipart/form-data">
	<input type="text" name="">
	{{csrf_field()}}
	{{method_field('DELETE')}}
	<button>提交</button>
</form>
</body>
</html>