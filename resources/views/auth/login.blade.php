@extends('layouts.auth')

@section('head')
  <title>Login</title>
@endsection

@section('body')
  <div class="loginbox">
    <header>
      <h1>Inloggen KPN Consulting</h1>
      <h1>Medewerkerspaneel &amp; swag</h1>
    </header>
    <form action="{{ url('/login') }}" method="POST">
      {!! csrf_field() !!}

      <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">

      <input type="password" name="password" placeholder="Password">

      <input type="checkbox" id="remember" value="{{ old('remember') }}" name="remember">
      <label for="remember">Remember me</label>

      <input type="submit" value="Log in">
    </form>
    <footer>
      <ul>
        <li><a href="#">Wachtwoord vergeten?</a></li>
        <li><a href="#">Gebruikersnaam vergeten</a></li>
        <li><a href="#">Veelgestelde vragen bij inloggen</a></li>
      </ul>
    </footer>
  </div>
@endsection
