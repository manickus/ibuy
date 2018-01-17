@extends('dashboard.layout')
@section('meta-description')
  {{ $ad->title }} - Cena: {{ $ad->maxprice }} Opis:  {{ $ad->body }}}
@endsection

@section('title')
 - {{ $ad->title }}
@endsection
@section('css')
<style>
.demo {
    width:420px;
}
ul {
    list-style: none outside none;
    padding-left: 0;
    margin-bottom:0;
}
li {
    display: block;
    float: left;
    margin-right: 6px;
    cursor:pointer;
}
img {
    display: block;
    height: auto;
    max-width: 100%;
}
</style>
@endsection
@section('facebook-share')
  <meta property="og:url"           content="{{ Request::url() }}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="IBuyNow" />
  <meta property="og:description"   content="{{ $ad->title }}" />
  @if(count($ad->photos))
    @foreach ($ad->photos as $photos)
    @if ($loop->first)
      <meta property="og:image"         content="{{ asset($photos->filename) }}" />
    @endif
    @endforeach
  @else
      <meta property="og:image"         content="{{asset('adphotos/nophoto.png')}}" />
  @endif
@endsection


@section('content')


<article class="ad-article-wrapper">
  <header class="ad-header">
    <h3> {{ $ad->type->name }} </h3>
    <h2 class="ad-header-title">{{ $ad->title }}</h2>
  </header>
  <div class="ad-content">
    <figure class="ad-slider">
      @if($ad->photos)
        <div id="slider">
          <ul id="lightSlider">
            @foreach ($ad->photos as $photo)
              <li data-thumb="{{asset($photo->filename)}}">
                <img src="{{asset($photo->filename)}}" />
              </li>
            @endforeach
          </ul>
        </div>
      @else
        <img src="{{asset('adphotos/nophoto.png')}}"  />
      @endif
    </figure>
    <section class="ad-info">
      <header class="main-article-body-header">
        <h3>Informacje: </h3>
      </header>
      <p>Kategoria: <span><a href="/category/{{$ad->category->slug}}">{{$ad->category->name}}</a></span></p>
      <p>Cena: <span>{{ number_format($ad->maxprice , 2, ","," ") }}zł</span> </p>
      @if ($ad->city)
        <p>Miasto: <span> {{ $ad->city }}</span></p>
      @endif
      @auth
        <p>Email: <span> {{ $ad->user->email }}</span></p>
        @if($ad->phone)
          <p>Nr tel: <span>{{ $ad->phone }}</span> </p>
        @endif
      @else
        <p> Email: <span>*****</span></p>
        @if($ad->phone)
          <p>Nr tel: <span>*****</span> </p>
        @endif
      @endauth
        @if(\Laratrust::hasRoleAndOwns('user', $ad) || \Laratrust::hasRoleAndOwns('superadministrator', $ad))
          <div class="btn-group">
                    {!! Form::model($ad,['route' => ['ad.edit',$ad] ,'method' => 'GET']) !!}
                     {!! Form::submit('Edytuj', ['class' => 'btn orange']) !!}
                  {!! Form::close() !!}
                    {!! Form::model($ad,['route' => ['ad.destroy',$ad] ,'method' => 'DELETE']) !!}
                     {!! Form::submit('Usuń', ['class' => 'btn red']) !!}
                  {!! Form::close() !!}
          </div>
          @else
            @auth
               <p>Obserwowane:
                <a href="{{ route('ad.favorite', ['ad' => $ad->id ])}}">
                 @if($favorite)
                  <i class="fa fa-star favorite" aria-hidden="true" ></i>
                 @else
                   <i class="fa fa-star nofavorite" aria-hidden="true"></i>
                 @endif
               </a>
               </p> 
           @endauth
       @endif
       <div  data-href="{{ Request::url() }}" style="margin-top: 10px;" data-layout="button" data-size="large" data-mobile-iframe="true">
      @if(count($ad->photos))
        @foreach ($ad->photos as $photos)
          @if ($loop->first)
            <a class="fb-xfbml-parse-ignore fb-share-button" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&picture={{asset($photos->filename)}}"><i class="fa fa-facebook" style="margin-right: 5px;" aria-hidden="true"></i>Udostępnij</a>
          @endif
        @endforeach
      @else
        <a class="fb-xfbml-parse-ignore fb-share-button" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&picture={{asset('adphotos/nophoto.png')}}"><i class="fa fa-facebook" style="margin-right: 5px;" aria-hidden="true"></i>Udostępnij</a>
      @endif
        
          
 
    </section>
  </div>
    <div class="ad-article-body">
     <header class="main-article-body-header">
        <h3>Treść ogłoszenia: </h3>
      </header>
      <p class="ad-article-text">
        {!! nl2br(e($ad->body)) !!}
      </p>
      <span>Wyświetleń: {{ $ad->page_visits_formatted }}</span>
    </div>
  </div>
</article>


<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
         {{--     <div class="fb-share-button" 
    data-href="{{ Request::url() }}" 
    data-layout="button_count">
  </div> --}}
  


            @include('messages.wrapper')


@endsection

@section('js')
<script type="text/javascript">
  $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 9
});
</script>
@endsection