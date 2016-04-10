@extends('layouts.dashboard')

@section('head')
	<title>Dashboard</title>
@endsection

@section('body')

	<div class="post">
		<form action="#" method="get">
			<textarea placeholder="Stel een vraag..." name="postsubmit" id="postsubmit" rows="5" class="postsubmit"></textarea>
		</form>
	</div>

	@foreach($feed as $f)
		<div class="post">
			<h1>{{ $f->user->name }} - {{ $f->subject }}</h1>
			<p>{!! $f->body !!}</p>
		</div>
	@endforeach
@endsection
