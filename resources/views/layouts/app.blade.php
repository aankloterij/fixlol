<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('/css/auth.css') }}">
    @yield('head')
</head>
<body>
    <img src="{{ url('/img/logo.svg') }}" id="logo">
    @yield('body')
</body>
</html>
