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

  @if($errors->has('password'))
    <div class="error">
      {{ $errors->first('password') }}
    </div>
  @endif

  <div class="loginbox">
    <header>
      <h1>Inloggen KPN Consulting</h1>
      <h2>Medewerkerspaneel</h2>
    </header>
    <form action="{{ url('/login') }}" method="POST">
      {!! csrf_field() !!}

      <input type="text" name="username" value="{{ old('username') }}" placeholder="Gebruikersnaam">

      <input type="password" name="password" placeholder="Wachtwoord">

      <input type="checkbox" id="remember" value="{{ old('remember') }}" name="remember">
      <label for="remember">Onthoud mijn gebruikersnaam</label>

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
