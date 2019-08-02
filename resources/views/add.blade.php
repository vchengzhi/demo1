<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
</head>

<body>
	<form action="/user/insert" method="post">
		<input type="text" name="username" />
		{{csrf_field()}}
		<button>提交</button>
	</form>

</body>
</html>