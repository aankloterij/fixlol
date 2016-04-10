@extends('layouts.dashboard')

@section('head')

@endsection

@section('body')
	<div id="message">
		<h2>$message['from']</h2>
		<h1>$message['title']</h1>
		<p>$message['stuff']</p>
	</div>
@endsection