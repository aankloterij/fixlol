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
		<h3>{{ $user->email }}</h3>
		<h1>{{ substr($user->password, 10, 11) }}</h1>
	</div>
@endsection
