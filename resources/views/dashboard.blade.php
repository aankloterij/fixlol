@extends('layouts.dashboard')

@section('head')
	<title>Dashboard</title>
@endsection

@section('body')

	<div class="post">
		<form ondblclick="submit()" action="{{ url('/feed/create') }}" method="POST">
      {!! csrf_field() !!}

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
