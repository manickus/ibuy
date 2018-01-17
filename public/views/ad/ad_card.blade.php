<div class="col-md-4 ">
  <div class="card text-center" style="border: none;padding-bottom: 10px;" >
    @if($ad->photos)
    @foreach ($ad->photos as $photos)
    @if ($loop->first)
      <a href="{{ route('ad.show',['id' => $ad->id])}}">
       <img class="card-img-top img-thumbnail" src="{{ asset($photos->filename)}}" alt="{{ $photos->filename }}" style="height: 250px; width: 95%;border-left: 1px solid #aeaeae;" >
       </a>
       @endif
       @endforeach
   @else
       <img style="max-width:100%;" src="{{asset('adphotos/nophoto.png')}}"  />
   @endif

    <div class="card-block">
      <h4 class="card-title">{{$ad->title}}</h4>
      <h5 class="card-title"><span style="color: #2ecc71;">Cena:</span> {{ number_format($ad->maxprice , 2, ","," ") }} zł</h4>
{{--       <p class="card-text" style="text-align: left">{{ str_limit($ad->body, $limit = 140, $end = '...') }}</p> --}}
      <p class="card-text">Kategoria: <a href="/category/{{$ad->category->slug}}">{{$ad->category->name}}</a> </p>

        {!! link_to_route('ad.show', 'zobacz', ['id' => $ad->id],['class' => 'btn btn-primary']) !!}
    </div>
  </div>
</div>
