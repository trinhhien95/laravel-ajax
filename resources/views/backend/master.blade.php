<!DOCTYPE html>
<html>
<head>
	<title>Admin Manager</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="{{ asset('js/myScript.js') }}"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="home">Home</div>
			<div id="login">Login</div>
		</div>
		<div id="content">
			<div id="left-menu">
				<ul>
					<li><a href="#">Dashboard</a></li>
					<li><a href="{{ route('category.index') }}">Category</a></li>
					<li><a href="#">Product</a></li>
					<li><a href="#">User</a></li>
					<li><a href="#">Slide</a></li>
				</ul>
			</div>
			<div id="right-content">
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>