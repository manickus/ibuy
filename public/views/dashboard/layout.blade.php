<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="with=device-width, initial-scale=1">
    <title>IBuyNow</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/f/favicon-16x16.png') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel=stylesheet href="{{ asset('css/dashboard/navbar.css')}}">
    <link rel=stylesheet href="{{ asset('css/dashboard/ad.css')}}">
    @yield('css')
  </head>
  <body>
    <div class="container">
      @include('dashboard.nav')
      @yield('content')

    <!-- Site footer -->
  @include('layouts.footer')

  </div> <!-- /container -->


  <script src="https://code.jquery.com/jquery-3.1.1.js"  crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    	<script  src="{{ asset('js/bootstrap.min.js')}}"></script>
      @yield('js')
</body>
</html>
