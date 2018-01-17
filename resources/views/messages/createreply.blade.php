
{!! Form::open(['route' => 'msg.store.reply']) !!}
<div class="form-group">
  {!! Form::label('body', "Treść wiadomości do sprzedającego:") !!}
  {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit('Wyślij', ['class' => 'btn btn-success']) !!}

</div>
{!! Form::hidden('ad', $ad->id) !!}
{!! Form::hidden('msg', $msg->id) !!}
{!! Form::close() !!}
