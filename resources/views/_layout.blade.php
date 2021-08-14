<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Simple Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bulma.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
	@yield('styles')
</head>
<body>
	<div class="container is-fluid">
		@yield('body')
	</div>

	@yield('scripts')
</body>
</html>