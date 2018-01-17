@extends('dashboard.layout')
@section('content')
<div class="row">
  <ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('profile.show')}}">Oferty</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile.messages')}}">Wiadomości</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile.favorites')}}">Ulubione</a>
  </li>
 
</ul>
</div>
  <div class="row">
    <section class="col-md-12">
      <div class="text-center">
        <h2>Twoje ofertys:</h2>
      </div>
      @foreach (array_chunk($ads->all(), 3) as $adsRow)
        <div class="row">
          @foreach ($adsRow as $ad)
      {{--
            <div class="col-md-4 ">
              <div class="card" >
                <img class="card-img-top" src="{{asset('adphotos/'.$ad->ad_img)}}" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">{{$ad->title}}</h4>
                  <h5 class="card-title"><span style="color: #2ecc71;">Cena:</span> {{ number_format($ad->maxprice , 2, ","," ") }} zł</h4>
                  <p class="card-text">{{ str_limit($ad->body, $limit = 140, $end = '...') }}</p>
                  <p class="card-text">Kategoria: <a href="/category/{{$ad->category->slug}}">{{$ad->category->name}}</a> </p>
                  <a href="/dashboard/ad/show/{{$ad->id}}" class="btn btn-primary">Zobacz</a>
                </div>
              </div>
          </div> --}}
          @include('ad.ad_card')



              {{-- <div class="user-ad-wrapper">
                <h2>{{$ad->title}}</h2>
                <p>{{ str_limit($ad->body, $limit = 140, $end = '...') }} </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div>
            </div> --}}


          @endforeach


      </div>
      @endforeach

    </section>


@endsection
