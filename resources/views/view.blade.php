<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
<meta name="description" content=" " />
<meta name="keywords" content=" " />
<script src="https://cdn.bootcss.com/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>
<script>
//原生
// var obj = JSON.parse('{"name":"xiaohigh","age":32}');
// console.log(obj);
//jquery
var Jobj = $.parseJSON('{"name":"xiaohigh","age":32}');
console.log(Jobj);
</script>
</body>
</html>