@extends('layouts.auth')

@section('head')
  <title>Login</title>
@endsection

@section('body')
  <div class="loginbox">
		<form action="{{ url('/register') }}" method="POST">
		  {!! csrf_field() !!}

		  <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">

		  <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">

		  <input type="password" name="password" placeholder="Password">
		  <input type="password" name="password_confirm" placeholder="Confirm">

		  <input type="checkbox" id="remember" value="{{ old('remember') }}" name="remember">
		  <label for="remember">Remember me</label>

		  <input type="submit" value="Log in">
		</form>
  </div>
@endsection
