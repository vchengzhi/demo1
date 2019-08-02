<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
</head>

<body>
<form action="/tiezi" method="post">
	<input type="text" name="abc">
	{{csrf_field()}}
	<button>提交</button>
</form>
</body>
</html>