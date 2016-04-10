@extends('layouts.dashboard')

@section('head')
	<link rel="stylesheet" href="{{ url('/css/profile.css') }}">
	<title>{{ $user->name }}</title>
@endsection

@section('body')
	<div id="profile">
		<img src="" alt="">
		<h1>{{ $user->name }}</h1>
		<h2>{{ $user->username }}</h2>
	</div>
@endsection
