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
	<a href="{{ url('/') }}"><img title="Ga naar de homepagina." src="{{ url('/img/logo.svg') }}" id="logo"></a>

	<aside id="left">
		<section>
			<span>Zoeken</span>
			<form action="{{ route*()->url('search') }}">
				<input type="text" placeholder="Zoekterm">
			</form>
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

				<input name="businesscommunications" type="checkbox" id="c_business_communications">
				<label for="c_business_communications">Buisiness Communications</label>

				<input name="cloud" type="checkbox" id="c_cloud_datacenters">
				<label for="c_cloud_datacenters">Cloud &amp; Datacenters</label>

				<input name="data" type="checkbox" id="c_data_iot">
				<label for="c_data_iot">Data &amp; IoT</label>

				<input name="digitalworkspace" type="checkbox" id="c_digital_workspace">
				<label for="c_digital_workspace">Digital Workspace</label>

				<input name="services" type="checkbox" id="c_professional_services">
				<label for="c_professional_services">Professional Services</label>

				<input name="organisatie" type="checkbox" id="c_strategie_organisatie">
				<label for="c_strategie_organisatie">Strategie &amp; Organisatie</label>

			</form>
		</section>

		<section>
			<span>Locaties</span>
			<form action="">
				<input name="apeldoorn" type="checkbox" id="c_apeldoorn">
				<label for="c_apeldoorn">Apeldoorn</label>

				<input name="groningen" type="checkbox" id="c_groningen">
				<label for="c_groningen">Groningen</label>

				<input name="zoetermeer" type="checkbox" id="c_zoetermeer">
				<label for="c_zoetermeer">Zoetermeer</label>
			</form>
		</section>
	</aside>

	<div id="content">
	  @yield('body')
	</div>

	<aside id="right">
		<section>
			<span>{{ Auth::user()->name }}</span>
			<a href="{{ url('/logout') }}">Log uit</a>
			<a href="{{ url('/profile') . '/' . Auth::user()->username }}">
				<img src="{{ url('/img/hipster3.jpg') }}">
			</a>
		</section>

		<section>
			<span>Meldingen</span>
			<form action="">
				<label for="">Jan heeft je uitg...</label>
				<label for="">Max zoekt naar ee...</label>
				<label for="">Naud commandeert ...</label>
			</form>
		</section>

		<section>
			<span>Berichten</span>
			<form action="">
				<label for="">Jan: je hebt nog ...</label>
				<label for="">Kees: Hallo, hoe ...</label>
				<label for="">De Jager: Maar ho...</label>
			</form>
		</section>
	</aside>
</body>
</html>
