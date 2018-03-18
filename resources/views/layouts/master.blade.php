<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/master.css') }}">
    @yield('stylesheets')
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  </head>
  <body>

    @include('layouts.navbar')

    <div id="page-container">
      <div id="content-container">

          @yield('content')

      </div>
    </div>

    <div id="particles-js"></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{ URL::asset('js/particles.js') }}"></script>
  </body>
</html>
