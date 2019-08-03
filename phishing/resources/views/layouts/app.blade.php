<?php
header('Access-Control-Allow-Origin: *');
?>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name=”robots” content=”noindex,nofollow”/>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>The Phone Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="css/app.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="img/logo.png" width="80%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/shop">Shop</a>
          </li>
          @if(Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          @else
          <li class="nav-item">
            <span class="nav-link">Logged in as {{ Auth::user()->name }}</span>
          </li>
          <li class="nav-item">
            <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link">
            Logout
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i> @if (Auth::check()) {{ \Cart::count() }} @endif</a>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; 2014 - 2018 - Phonestore买手机</p>
      <p></p>
      <p class="m-0 text-center text-white"><img src="/img/ideal.png" width="40px"> <img src="/img/paypal.png" width="40px"> <img src="/img/visa.png" width="40px"></p>
      <p class="m-0 text-center text-white"><img src="/img/verisign.png" width="50px"> <img src="/img/mcafee.png" width="40px"></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/tracking.js"></script>

  <script>
  document.oncontextmenu = function() {
    return false;
  }
  </script>

</body>

</html>
