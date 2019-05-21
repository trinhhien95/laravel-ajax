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
			<div id="home">
				<a href="#" class="">Home</a>
			</div>
			<div id="login">
				<div class="login-right"><p>Hello Admin</p></div>
				<div class="login-right"><p>Logout</p></div>
			</div>
		</div>
		<div id="content">
			<div id="left-menu" class="list-group">
				<ul>
					<a href="#" class="list-group-item"><li>Dashboard</li></a>
					<a href="{{ route('category.index') }}" class="list-group-item"><li>Category</li></a>
					<a href="#" class="list-group-item"><li>Product</li></a>
					<a href="#" class="list-group-item"><li>User</li></a>
					<a href="#" class="list-group-item"><li>Slide</li></a>
				</ul>
			</div>
			<div id="right-content">
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>