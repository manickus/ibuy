@extends('dashboard.layout')
@section('content')
@include('profile.nav')
    <section class="last-popular-wrapper">
    <header class="last-popular-header">
      <h2>Obserwowane:</h2>
    </header>
    <div class="ads-popular-wrapper">
      @foreach ($favorites as $ad)
        @include('ad.ad_card')
      @endforeach
    </div>
  </section>
  
@endsection
