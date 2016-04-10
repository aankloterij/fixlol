@extends('layouts.dashboard')

@section('head')
	<link rel="stylesheet" href="{{ url('/css/profile.css') }}">
	<title>{{ $user->name }}</title>
@endsection

@section('body')
	<div class="profilebox">
		<img src="{{ url('/img/hipster3.jpg') }}" alt="Hipster 3">
		<h1>{{ $user->name }}</h1>
		<h2>{{ $user->username }}</h2>
		<p>
				Hallo, ik werk al 24 jaar in trouwe dienst bij KPNConsulting. Ik heb me gespecialiceerd in Internet of Things, en mag me dan ook teamleider noemen van 40 man. In het verleden heb ik aan zeer uiteenlopende projecten deelgenomen, dit heb ik met veel plezier gedaan. Ik probeer alle vragen zo snel mogelijk te beantwoorden.
				<a href="">#Communication </a>
				<a href="">#IoT</a>
				<a href="">#Groningen</a>
				<a href="">#PHP</a>
				<a href="">#Assembly</a>
		</p>
		<h3>{{ $user->email }}</h3>
	</div>

	<div class="profilebox">
		<div class="timeline">
			<div class="time-item">2004 - Van school gegaan</div>
			<div class="time-item">2004 - Naar school gegaan</div>
			<div class="time-item">2001 - Geld was op</div>
			<div class="time-item">1999 - Loterij gewonnen</div>
			<div class="time-item">1998 - Geboren</div>
		</div>
	</div>
@endsection
