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
			<span>Zoeken</span>
			<input type="text" placeholder="Zoekterm">
		</section>

		<section>
			<span>Categorie&euml;n</span>
			<form action="">
				<input name="" type="checkbox" id="c_favorieten">
				<label for="c_favorieten">Favorieten</label>

				<input name="" type="checkbox" id="c_projecten">
				<label for="c_projecten">Mijn projecten</label>

				<input name="" type="checkbox" id="c_algemeen">
				<label for="c_algemeen">Algemeen</label>
			</form>
		</section>

		<section>
			<span>Afdelingen</span>
			<form action="">

				<input type="checkbox" id="c_buisiness_communications">
				<label for="c_buisiness_communications">Buisiness Communications</label>

				<input type="checkbox" id="c_cloud_datacenters">
				<label for="c_cloud_datacenters">Cloud &amp; Datacenters</label>

				<input type="checkbox" id="c_data_iot">
				<label for="c_data_iot">Data &amp; IoT</label>

				<input type="checkbox" id="c_digital_workspace">
				<label for="c_digital_workspace">Digital Workspace</label>

				<input type="checkbox" id="c_professional_services">
				<label for="c_professional_services">Professional Services</label>

				<input type="checkbox" id="c_strategie_organisatie">
				<label for="c_strategie_organisatie">Strategie &amp; Organisatie</label>

			</form>
		</section>

		<section>
			<span>Locaties</span>
			<form action="">
				Apeldoorn
				Groningen Zoetermeer
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
