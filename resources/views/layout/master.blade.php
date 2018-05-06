<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Laravel test - @yield('title')</title>
	</head>
	<body>
	@section('header')
		Master Header
	@show

	<div class="container">
		@yield('content')
	</div>

	@section('footer')
		Master footer
	@show
	</body>
</html>