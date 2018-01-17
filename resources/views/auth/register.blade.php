@extends('dashboard.layout')

@section('content')




<div class="register-wrapper">
    {!! Form::open(['route' => 'register']) !!}
        <div class="form-register-wrapper">
            <header>
                <h2>Rejestracja:</h2>
            </header>
             <div class="form-group-register">
                {!! Form::label('name', "Imię:", ['class'=>'h3']) !!}
                {!! Form::text('name', null, array('class' => 'form-control') ) !!}
            </div>
            <div class="form-group-register">
                {!! Form::label('surname', "Nazwisko:", ['class'=>'h3']) !!}
                {!! Form::text('surname', null, array('class' => 'form-control') ) !!}
            </div>
            <div class="form-group-register">
                {!! Form::label('email', "E-Mail:", ['class'=>'h3']) !!}
                {!! Form::email('email', null, array('class' => 'form-control') ) !!}
            </div>
            <div class="form-group-register">
                {!! Form::label('password', "Hasło:", ['class'=>'h3']) !!}
                {!! Form::password('password', null, array('class' => 'form-control') ) !!}
            </div>
            <div class="form-group-register">
                {!! Form::label('password_confirmation', "Powtórz hasło:", ['class'=>'h3']) !!}
                {!! Form::password('password_confirmation', null, array('class' => 'form-control') ) !!}
            </div>
            <div class="form-group-register">
                {!! Form::submit('Rejestruj', ['class' => 'btn btn-success btn-register']) !!}
            </div>

        </div>
    {!! Form::close() !!}

    <figure>
        <img src="https://image.ibb.co/j84hE6/business_3076946_640.jpg" alt="shopping bag">
    </figure>
</div>



@endsection
