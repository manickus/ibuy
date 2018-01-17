@extends('dashboard.layout')

@section('css')
  <style>
    .msg {
      text-align: left;
      padding: 15px;
      border: 1px solid #aeaeae;
      border-radius: 15px;
      background: #b3e5fc;
      margin: 10px;
      -webkit-box-shadow: 2px 6px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 2px 6px 5px 0px rgba(0,0,0,0.75);
      box-shadow: 2px 6px 5px 0px rgba(0,0,0,0.75);

    }

    .reply-msg
    {
      background: #2ecc71;
    }

    
    .sender-email
    {
      font-weight: bold;
      font-size: 18px;
      margin-top: 15px;
      margin-left: auto;
    }

    .breakline
    {
      display: block;
      font-size: 14px;
    }

    .text-box
    {
      background: #3498db;
      margin-top: 10px;
      margin-bottom: 20px;
      width: 60%;
      margin-left: auto;
      margin-right: auto;
      border: 1px solid #aeaeae;
      padding: 10px;
      box-sizing: border-box;
      -webkit-box-shadow: 2px 6px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 2px 6px 5px 0px rgba(0,0,0,0.75);
      box-shadow: 2px 6px 5px 0px rgba(0,0,0,0.75);
    }

    .push-left
    {
      margin-left: auto;
    }

    .center-msg
    {
      margin-left: auto;
      margin-right: auto;
    }


  </style>
@endsection



@section('content')
@include('profile.nav')
  <section class="last-popular-wrapper">
    <header class="last-popular-header">
      <h2>Tytuł: {{ $pm->getAdAtrribute()->title }}</h2>
    </header>
    </section>
 <div class="row" style="margin-top: 20px">
   <div class="col-md-6 center-msg">
   <div class="msg">
    <p><strong>{{ $pm->getSenderAttribute()->email }}</strong></p>
            {!! nl2br(e($pm->message)) !!}
            <br>
            @if($pm->read == 0)
              <small class="text-muted">Wysłano: {{ Carbon\Carbon::instance($pm->created_at)->diffForHumans()}}</small>
            @else
            <small class="text-muted">Odczytano: {{ Carbon\Carbon::instance($pm->updated_at)->diffForHumans()}}</small>
            @endif
            </div>
 </div>
</div>

 @if(count($pm->reply))
    @foreach($pm->reply as $reply)
    <div class="row">
    @if($reply->getSenderAttribute()->id == \Auth::id())
      <div class="col-md-6">
        <div class="msg">
    @else
      <div class="col-md-6 push-left">
        <div class="msg reply-msg"> 
    @endif
        
            <p><strong>{{ $reply->getSenderAttribute()->email }}</strong></p>
            {!! nl2br(e($reply->message)) !!}
            <br>
            @if($reply->read == 0)
              <small class="text-muted">Wysłano: {{ Carbon\Carbon::instance($reply->created_at)->diffForHumans()}}</small>
            @else
            <small class="text-muted">Odczytano: {{ Carbon\Carbon::instance($reply->updated_at)->diffForHumans()}}</small>
            @endif
        </div>
      </div>
    </div>
    @endforeach
 @endif


<div class="text-box">

{!! Form::open(['route' => 'msg.reply']) !!}
<div class="form-group">
  {!! Form::label('body', "Treść wiadomości:") !!}
  {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit('Wyślij', ['class' => 'btn btn-success']) !!}

</div>
{!! Form::hidden('pm_id', $pm->id) !!}

@if(\Auth::id() == $pm->getAdAtrribute()->user->id)
  {!! Form::hidden('receiver_id', $pm->getSenderAttribute()->id) !!}
@else
  {!! Form::hidden('receiver_id', $pm->getAdAtrribute()->user->id) !!}
@endif

{!! Form::close() !!}

</div>

@endsection