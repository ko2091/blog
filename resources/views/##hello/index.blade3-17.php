
<html>
<head>
	<title>hello index</title>
	<style>
		body{font-size: 16pt; color:#999;}
		h1{font-size: 100pt; text-align: right; color:blue; margin: -50pt 0pt 100pt 0pt;}
	</style>
</head>
<body>
	
	<h1>index</h1>
	<p>this is sample page</p>
	<P>{{$msg}}</P>
	<form method="POST" action="/hello">
		{{csrf_field() }}
		<input type="text" name="msg">
		<input type="submit" >
	</form>
		
		
	
</body>
</html>
