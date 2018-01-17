@extends('dashboard.layout')
@section('content')

@include('profile.nav')
    <section class="last-popular-wrapper">
    <header class="last-popular-header">
      <h2>Twoje Oferty:</h2>
    </header>
    <div class="ads-popular-wrapper">
      @foreach ($ads as $ad)
        @include('ad.ad_card')
      @endforeach
    </div>
  </section>
@endsection
