@section('css')
  <style>
    .msg {
      text-align: left;
      padding: 15px;
      border: 1px solid #aeaeae;
      border-radius: 15px;
      background: #b3e5fc;
    }
  </style>
@endsection


@if(\Laratrust::hasRoleAndOwns('user', $ad) || \Laratrust::hasRoleAndOwns('user', $msg))
   <div class="row">
     <div class="col-md-8" style="margin-bottom: 16px;">
        <div class="col-md-12">
       <div class="msg" style="  text-align: left;
         padding: 15px;
         border: 1px solid #aeaeae;
         border-radius: 15px;
         background: #b3e5fc;">
         <strong> {{ Auth::user()->email }} </strong>
         <br>
          {!! nl2br(e($msg->body)) !!}
       </div>
     </div>
     @foreach ($msg->replymsgs as $reply)
       <div class="row">
     <div class="col-md-10 push-md-2" style="margin-top: 16px;">
    <div class="msg" style="  text-align: left;
      padding: 15px;
      border: 1px solid #aeaeae;
      border-radius: 15px;
      background: #bdc3c7;
      ">
      <strong> {{ Auth::user()->email }} </strong>
      <br>
        {!! nl2br(e($reply->body)) !!}
    </div>
  </div>
  </div>
  @endforeach
     @include('messages.createreply')
   </div>
 </div>
@endif
