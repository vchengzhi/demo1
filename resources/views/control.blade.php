<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>控制</title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
</head>

<body>
<h2>流程控制</h2>
@if($isVip)
	VIP
@endif

<h2>循环控制</h2>
<ul>
	@foreach($classmates as $v)
		<li>{{$v}}</li>
	@endforeach
</ul>


</body>
</html>