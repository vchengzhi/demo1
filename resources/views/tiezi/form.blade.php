<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
</head>

<body>
<form action="/upload" method="post" enctype="multipart/form-data">
	<input type="file" name="img">
	{{csrf_field()}}
	<button>提交</button>
</form>
</body>
</html>