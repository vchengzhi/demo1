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
<?php if(\Session::has('info')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo \Session::get('info') ?>
	</div>
<?php endif; ?>
</body>
</html>