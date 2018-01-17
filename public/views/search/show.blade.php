@extends('dashboard.layout')

@section('content')

  <div class="container">
    <div class="container-wrap">


    <h1 class="h4">Wynik wyszukiwania:</h1>  <h5>{{$s}}</h5>
    <div class="line">
      <p class="read-more"><i class="fa fa-diamond"></i></p>
    </div>
  </div>
  </div>
@foreach (array_chunk($ads->all(), 3) as $adsRow)

  <div class="row">
    @foreach ($adsRow as $ad)

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
<div>
{{ $ads->appends(['search' => $s])->links('vendor.pagination.bootstrap-4') }}
</div>
@endsection


@section('css')
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>
  .container-wrap {
  max-width: 800px;
  margin: auto;
}


.line {
  border-top: 1px solid #111;
  display: block;
  margin-top: 60px;
  padding-top: 50px;
  position: relative;
}

.read-more {
  background: #111;
  border-radius: 50%;
  border: 10px solid #fdfdfd;
  color: #fff;
  display: block;
  font-size: 30px;
  font-weight: normal;

  width: 70px;
  line-height: 70px;
  margin: -40px 0 0 -40px;
  position: absolute;
  bottom: 0px;
  left: 50%;
  text-align: center;
  text-transform: uppercase;
}

</style>
@endsection
