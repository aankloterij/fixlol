@extends('layouts.dashboard')

@section('head')
	<title>Dashboard</title>
@endsection

@section('body')
	@foreach($feed as $f)
		<div class="post">
			<h1>{{ $f->user->name }} - {{ $f->subject }}</h1>
			<p>{!! $f->body !!}</p>
		</div>
	@endforeach
@endsection
