<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SouD @yield('title', ucfirst(Route::currentRouteName()))</title>
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap/3.3.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  </head>
  <body>
    @yield('navbar')
    @yield('content')
    @yield('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/vendor/bootstrap/3.3.1/bootstrap.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>
