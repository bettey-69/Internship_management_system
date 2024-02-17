<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title> laravel 9 custom login registartion </title>
		<link  rel="stylesheet" type="text/css" href="https;//cdn.jsdeliver.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
	</head>
	<body>
	<nav class="navbar navbar-light navbar-expand-lg mb-5" >
	<div class="container">
		<a href="#" class="navbar-brand mr-auto">laravel 9 cyudtom login registration </a>
		<button class="navbar-toggler" type="button">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="cpllapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				@guest
				<li class="nav-item">
					<a class="nav-link" href="{{route('login')}}">login</a>
</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('registration')}}">register</a>
</li>
@else
				<li class="nav-item">
					<a class="nav-link" href="{{logout}}">logout</a>
</li>
@endguest
</ul>
		</div>
	</div>
</nav>
<div class="container mt-5"><

	@yield('content')
</div>
	</body>

	</html>