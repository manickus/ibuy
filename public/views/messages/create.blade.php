
@if(!\Laratrust::hasRoleAndOwns('user', $ad))
{!! Form::open(['route' => 'msg.store']) !!}
<div class="form-group">
  {!! Form::label('body', "Treść wiadomości do sprzedającego:") !!}
  {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit('Zapisz', ['class' => 'btn btn-success']) !!}

</div>
{!! Form::hidden('ad', $ad->id) !!}
{!! Form::close() !!}
@endif
