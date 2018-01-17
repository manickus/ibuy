
@if(!\Laratrust::hasRoleAndOwns('user', $ad))
{!! Form::open(['route' => 'pm.send']) !!}
<div class="form-group">
  {!! Form::label('body', "Treść wiadomości do sprzedającego:") !!}
  {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
@if(\Auth::check())
	  {!! Form::submit('Wyślij', ['class' => 'btn btn-success']) !!}
@else
    {!! link_to(route('login'), 'Zaloguj', ['class' => 'btn btn-primary']) !!}
@endif

</div>
{!! Form::hidden('ad_id', $ad->id) !!}
{!! Form::hidden('receiver_id', $ad->user->id) !!}
{!! Form::close() !!}
@endif
