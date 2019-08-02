<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{{$title}}</title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
</head>

<body>
@include('layouts/header');
<p>{{$username or '游客'}}</p>
<p>{{$content}}</p>
<p>{{time()}}</p>
<p>{{date('Y-m-d')}}</p>
<p>{!!$page!!}</p>
</body>
</html>