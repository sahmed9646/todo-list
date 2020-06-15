<!DOCTYPE html>
<html>
<head>
	<title>Todo List Program</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>
	<footer id="footer" class="text-center">
		<p>Copywright &copy; todolist app 2017</p>
	</footer>
</body>
</html>