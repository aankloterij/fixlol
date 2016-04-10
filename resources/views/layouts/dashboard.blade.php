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
				<input name="c_favorieten" name="" type="checkbox" id="c_favorieten">
				<label for="c_favorieten">Favorieten</label>

				<input name="c_projecten" name="" type="checkbox" id="c_projecten">
				<label for="c_projecten">Mijn projecten</label>

				<input name="c_algemeen" name="" type="checkbox" id="c_algemeen">
				<label for="c_algemeen">Algemeen</label>
			</form>
		</section>

		<section>
			<span>Afdelingen</span>
			<form action="">

				<input name="c_buisiness_communications" type="checkbox" id="c_buisiness_communications">
				<label for="c_buisiness_communications">Buisiness Communications</label>

				<input name="c_cloud_datacenters" type="checkbox" id="c_cloud_datacenters">
				<label for="c_cloud_datacenters">Cloud &amp; Datacenters</label>

				<input name="c_data_iot" type="checkbox" id="c_data_iot">
				<label for="c_data_iot">Data &amp; IoT</label>

				<input name="c_digital_workspace" type="checkbox" id="c_digital_workspace">
				<label for="c_digital_workspace">Digital Workspace</label>

				<input name="c_professional_services" type="checkbox" id="c_professional_services">
				<label for="c_professional_services">Professional Services</label>

				<input name="c_strategie_organisatie" type="checkbox" id="c_strategie_organisatie">
				<label for="c_strategie_organisatie">Strategie &amp; Organisatie</label>

			</form>
		</section>

		<section>
			<span>Locaties</span>
			<form action="">
				<input name="c_apeldoorn" type="checkbox" id="c_apeldoorn">
				<label for="c_apeldoorn">Apeldoorn</label>

				<input name="c_groningen" type="checkbox" id="c_groningen">
				<label for="c_groningen">Groningen</label>

				<input name="c_zoetermeer" type="checkbox" id="c_zoetermeer">
				<label for="c_zoetermeer">Zoetermeer</label>
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
