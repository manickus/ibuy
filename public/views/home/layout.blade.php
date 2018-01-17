<!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js is-ie"><![endif]-->
<!--[if gt IE 8]><!--><html class=no-js><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="IBuyNow Serwis Aukcyjny">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



	<title>IBuyNow</title>
	<link rel=stylesheet href="{{ asset('css/home/main.css')}}">
	<!--[if lte IE 8]>
	<link rel=stylesheet href="css/ie.css">
	<![endif]-->
		<script src="{{ asset('js/home/vendor/modernizr.js')}}"></script>

		<script src="{{ asset('js/home/vendor/respond.min.js')}}"></script>

</head>

<body>
	<div class="level level-hero hero-home has-hint ">


		<div class="hero-overlay visible-lg visible-xs img_bg_home"></div>



		<div class="container full-height ">
			<div class=v-align-parent>
				<div class=v-center>
					<div class="row">
						<div class="col-xs-10 col-sm-6">
							<h1 class="mb-10 heading">I Buy Now <span>Mała rewolucja.</span></h1>
							<div class="subheading mb-20">Kupowanie<br >Nigdy nie było takie proste. </div>
						</div>
					</div>
					<div>
						<a class="btn btn-prepend btn-launch-video" href="{{ route('login') }}">
							<i class="prepended icon-append-play"></i>Zaloguj
						</a>
						<a class="btn btn-prepend" href="{{ route('register') }}">
							<i class="prepended icon-append-play"></i>Rejestracja
						</a>
					</div>
				</div>
			</div>

			<div class=hint-arrow></div>
		</div>
	</div>
	<div class=level>

		<div class="container mb-100 xs-mb-40">
			<div class=row>
				<div class="col-sm-5 col-md-4 col-md-offset-2 col-sm-offset-1">
					<h1 class="mb-10 xs-mb-10 heading color-dark heading-bordered">I BUY<br class=hidden-xs> Now</h1>
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<h2 class="w-300 color-dark mb-10 xs-mb-10">Kupowanie.</h2>
					<p class="xs-mw">Nigdy nie było takie proste.
				</div>
			</div>
		</div>

		<img src="img/v2/iphone6.min.png" alt class="mb-80 hidden-xs iphone-inline">



		<div class=container>
			<div class="row mb-90 xs-mb-0">

				<div class="col-sm-1 col-sm-offset-2">
					<i class="icon icon-check"></i>
				</div>
				<div class="col-sm-3">
					<h3 class="mb-15">Mobilność</h3>
					<p class="smaller xs-mb-40 xs-mw">Dostępne z każdego urządzenia.
				</div>

				<div class="col-sm-1">
					<i class="icon icon-calendar"></i>
				</div>
				<div class="col-sm-3">
					<h3 class="mb-15">Dodanie oferty</h3>
					<p class="smaller xs-mb-40 xs-mw">Nie trwa dłużej niż 5 minut.
				</div>

			</div>

			<div class=row>

				<div class="col-sm-1 col-sm-offset-2">
					<i class="icon icon-user"></i>
				</div>
				<div class="col-sm-3">
					<h3 class="mb-15">Wiadomości</h3>
					<p class="smaller xs-mb-40 xs-mw">Łatwa komunikacja pomiędzy wystawiającym ofertę, a zainteresowanym.
				</div>

				<div class="col-sm-1">
					<i class="icon icon-clock"></i>
				</div>
				<div class="col-sm-3">
					<h3 class="mb-15">Kontakt</h3>
					<p class="smaller xs-mb-40 xs-mw">Na wasze pytania, odpowiadamy o każdej porze.
				</div>

			</div>
		</div>
	</div>




	</div>



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

	<script  src="{{ asset('js/home/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/home/dropdown.js')}}"</script>
	<script  src="{{ asset('js/home/modal.js')}}" ></script>
	<script src="{{ asset('js/home/main.js')}}" ></script>
	<!-- //-end- concat_js -->




</body>
</html>
