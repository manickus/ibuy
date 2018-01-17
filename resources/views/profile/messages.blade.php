@extends('dashboard.layout')
@section('css')
<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">

  <style>
    .ad-msg
    {
      border: 1px solid #aeaeae;
      box-sizing: border-box;
      padding: 10px;
      border-radius: 15px;
      background: #ecf0f1;
      margin-bottom: 15px;
      font-family: 'Droid Sans', sans-serif;
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }

    .ad-link {
      text-decoration: none;
      color: #000000;
    }

    .ad-link:hover
    {
      text-decoration: none;
    }

    .not-readed
    {
      background: #f39c12;
    }
  </style>
@endsection

@section('content')
@include('profile.nav')
  <section class="last-popular-wrapper">
    <header class="last-popular-header">
      <h2>Wiadomości:</h2>
    </header>
    </section>
    <section class="messages">
      @foreach ($pms as $pm)
        <a class="ad-link" href="{{ route('pm.show',['id' => $pm->id])}}">
          @if(count($pm->reply))
            @foreach($pm->reply as $reply)
              @if($loop->last)
                @if($reply->read == 0 && $reply->receiver_id == \Auth::user()->id)
                  <article class="msg-info not-readed">
                @else
                  <article class="msg-info">
                @endif
              @endif
            @endforeach
          @else
             @if($pm->read == 0 && $pm->receiver_id == \Auth::user()->id)
                <article class="msg-info not-readed">
             @else
                <article class="msg-info">
             @endif
          @endif
            <figure>
              @if(count($pm->getAdAtrribute()->photos))
                @foreach ($pm->getAdAtrribute()->photos as $photos)
                  @if ($loop->first)
                    <img src="{{ asset($photos->filename)}}" alt="{{ $pm->getAdAtrribute()->title }}" width="200" height="100">
                  @endif
                @endforeach
              @else
                <img src="http://via.placeholder.com/200x100" alt="No photo" width="200" height="100">
              @endif
            </figure>
            <h3>{{ $pm->getAdAtrribute()->title }}</h3>
            <p>Od:
                @if($pm->receiver_id == \Auth::user()->id)
                  {{ $pm->getSenderAttribute()->email }}
                @else
                  {{ $pm->getReceiverAtrribute()->email }}
                @endif
             </p>
          </article>
        </a>
      @endforeach
    </section>
@endsection
