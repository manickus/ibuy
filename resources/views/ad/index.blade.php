@extends('dashboard.layout')
@section('meta-description')
Darmowa tablica ogłoszeniowa. Znajdziecie tutaj mnóstwo ofert z różnych kategorii. Od samochodów, przez telefony komórkowe, po nieruchomości a nawet pracę.
@endsection

@section('content')

  <div class="container">
@if(session()->has('status'))
    <div class="alert alert-success" id="alertMsg"> 
    {!! session('status') !!}
    </div>

  
@endif

    <div class="container-wrap">
    <header class="last-popular-header">
      <h2>Ostatnio dodane:</h2>
    </header>

    
  </div>
@foreach (array_chunk($ads->all(), 4) as $adsRow)

  <div class="ads-wrapper">
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
</div>
@endsection




@section('js')
  @if(session()->has('status'))
     <script type="text/javascript">
        setTimeout(function() {
           $('#alertMsg').fadeOut();
          },4000 );
      </script>
  @endif
@endsection
