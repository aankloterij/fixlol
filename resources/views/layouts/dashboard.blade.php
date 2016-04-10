<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('/favicon.ico') }}">
	<link rel="stylesheet" href="{{ url('/css/main.css') }}">
	<link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">
	@yield('head')
</head>
<body>
	<aside id="left">
		<section>
			<h1>Categories</h1>
			<form action="">
				<input type="checkbox" id="1">
				<label for="1">Category 1</label>

				<input type="checkbox" id="2">
				<label for="2">Category 2</label>

				<input type="checkbox" id="3">
				<label for="3">Category 3</label>

				<input type="checkbox" id="4">
				<label for="4">Category 4</label>
			</form>
		</section>

		<section>
			<h1>Locaties</h1>
			<form action="">
				<input type="checkbox" id="1">
				<label for="1">Category 1</label>

				<input type="checkbox" id="2">
				<label for="2">Category 2</label>

				<input type="checkbox" id="3">
				<label for="3">Category 3</label>

				<input type="checkbox" id="4">
				<label for="4">Category 4</label>
			</form>
		</section>

		<section>
			<h1>Afdelingen</h1>
			<form action="">
				<input type="checkbox" id="1">
				<label for="1">Category 1</label>

				<input type="checkbox" id="2">
				<label for="2">Category 2</label>

				<input type="checkbox" id="3">
				<label for="3">Category 3</label>

				<input type="checkbox" id="4">
				<label for="4">Category 4</label>
			</form>
		</section>

	</aside>

	<div id="content">
	  @yield('body')
	</div>

	<aside id="right">
		sdf
	</aside>
</body>
</html>
