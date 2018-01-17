@extends('dashboard.layout')


@section('content')

<div class="container-wrap">
    <header class="last-popular-header">
      <h2>Wynik Wyszukiwania:</h2>
    </header>
</div>

<div class="search-ads-wrapper">
  
<div class="ads-side">
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
  <div>
    {{ $ads->links() }}
  </div>
</div>

<div class="search-options" >
        <header class="main-article-body-header">
        <h3>Filtry: </h3>
      </header>
       {!! Form::open(['route' => 'category.search', 'method' => 'get']) !!}
       <div class="row">
       <div class="form-group col-md-2">
   

    {!! Form::text('s',null, ['class'=>'form-control',
                                            'placeholder' => 'Szukaj']) !!}
    </div>

       <div class="form-group col-md-2">
   

    {!! Form::text('lowprice',null, ['class'=>'form-control',
                                            'placeholder' => 'Cena od']) !!}
    </div>
       <div class="form-group col-md-2">

    {!! Form::text('highprice',null, ['class'=>'form-control',
                                            'placeholder' => 'Cena do']) !!}
    </div>
       <div class="form-group col-md-2">

    {!! Form::text('city',null, ['class'=>'form-control',
                                            'placeholder' => 'Miasto']) !!}
    </div>

  
  <div class=" form-group col-md-2" >

        {!! Form::submit('Szukaj', ['class' => 'btn btn-success']) !!}

      </div>
    {!! Form::close() !!}
    </div>


   </div>
</div>
@endsection


