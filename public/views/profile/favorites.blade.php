@extends('dashboard.layout')
@section('content')
<div class="row">
  <ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile.show')}}">Oferty</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile.messages')}}">Wiadomości</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('profile.favorites')}}">Ulubione</a>
  </li>
 
</ul>
</div>
  <div class="row">
    <section class="col-md-12">
      <div class="text-center">
        <h2>Ulubione:</h2>
      </div>
      @foreach (array_chunk($favorites->all(), 3) as $adsRow)
        <div class="row">
          @foreach ($adsRow as $ad)

          @include('ad.ad_card')


          @endforeach


      </div>
      @endforeach

    </section>


  </div>

  
@endsection
