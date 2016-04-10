@extends('layouts.dashboard')

@section('head')
	<link rel="stylesheet" href="{{ url('/css/profile.css') }}">
	<title>{{ $user->name }}</title>
@endsection

@section('body')
	<div id="profile">
		<img src="{{ url('/img/hipster3.jpg') }}" alt="Hipster 3">
		<h1>{{ $user->name }}</h1>
		<h2>{{ $user->username }}</h2>
		<p>
				Hallo, ik werk al 24 jaar in trouwe dienst bij KPNConsulting. Ik heb me gespecialiceerd in Internet of Things, en mag me dan ook teamleider noemen van 40 man. In het verleden heb ik aan zeer uiteenlopende projecten deelgenomen, dit heb ik met veel plezier gedaan. Ik probeer alle vragen zo snel mogelijk te beantwoorden. 
		</p>
		<h3>{{ $user->email }}</h3>
	</div>
@endsection
