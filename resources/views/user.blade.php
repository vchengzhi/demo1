<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
<link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php if(\Session::has('error')): ?>
	<div class="alert alert-danger" role="alert">
		<?php echo \Session::get('error') ?>
	</div>
<?php endif; ?>
<form action="/user-2" method="post" enctype="multipart/form-data">
	<input type="text" name="username" value="{{old('username')}}">
	<input type="text" name="password" value="{{old('password')}}">
	{{csrf_field()}}
	<button>提交</button>
</form>
</body>
</html>