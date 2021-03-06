@extends('layouts.auth')

@section('head')
  <title>Login</title>
@endsection

@section('body')
	 @if($errors->has('username'))
    <div class="error">
      {{ $errors->first('username') }}
    </div>
  @endif

  @if($errors->has('name'))
    <div class="error">
      {{ $errors->first('name') }}
    </div>
  @endif

  @if($errors->has('email'))
    <div class="error">
      {{ $errors->first('email') }}
    </div>
  @endif

  @if($errors->has('password'))
    <div class="error">
      {{ $errors->first('password') }}
    </div>
  @endif

  @if($errors->has('password_confirmation'))
    <div class="error">
      {{ $errors->first('password_confirmation') }}
    </div>
  @endif
  <div class="loginbox">
		<form action="{{ url('/register') }}" method="POST">
		  {!! csrf_field() !!}

		  <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">

		  <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
		  <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">

		  <input type="password" name="password" placeholder="Password">
		  <input type="password" name="password_confirmation" placeholder="Confirm">

		  <input type="checkbox" id="remember" value="{{ old('remember') }}" name="remember">
		  <label for="remember">Remember me</label>

		  <input type="submit" value="Log in">
		</form>
  </div>
@endsection
