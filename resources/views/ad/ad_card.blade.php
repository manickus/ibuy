<div class="ad-wrapper ">
  <div class="card text-center">
    <figure>
      @if(count($ad->photos))
      @foreach ($ad->photos as $photos)
      @if ($loop->first) 
        <a href="{{ route('ad.show',['id' => $ad->id])}}">
          <img class="ad-card-img" src="{{ asset($photos->filename)}}" alt="{{ $photos->filename }}"  >
         </a>
         @endif
         @endforeach
     @else
     <a href="{{ route('ad.show',['id' => $ad->id])}}">
         <img class="ad-card-img"  src="{{asset('adphotos/nophoto.png')}}"  />
      </a>
     @endif
    </figure>

    <header class="ad-card-title">
      <h3 class="type">{{ $ad->type->name }}: </h6>
      <h2 class="title"> {{$ad->title}}</h5>
    </header>

  
    <div class="ad-info-card-wrapper">
      
      <p class=""><span>Cena:</span> {{ number_format($ad->maxprice , 2, ","," ") }} zł</h5>
{{--       <p class="card-text" style="text-align: left">{{ str_limit($ad->body, $limit = 140, $end = '...') }}</p> --}}
      <p class="">Kategoria: <a href="/category/{{$ad->category->slug}}">{{$ad->category->name}}</a> </p>
      <p class=""><small class="">Dodano: {{  $ad->created_at }}</small></p>

      
    </div>
  </div>
</div>
