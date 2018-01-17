@extends('dashboard.layout')


@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-create-ad-wrapper">
  <header class="form-create-ad-header">
    <h2> Formularz </h2>
  </header>
  {!! Form::open(['route' => 'ad.store' ,'files' => true,'enctype' => 'multipart/form-data']) !!}
    <div class="form-create-ad">
      <div class="form-group-create">
        {!! Form::label('ad_type', "Typ:", ['class'=>'h3']) !!}
        {!! Form::select('ad_type', $types,null, array('class' => 'form-control') ) !!}
      </div>
      <div class="form-group-create">
        {!! Form::label('title', "Tytuł:" , ['class'=>'h3']) !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
      </div>
      <div class="form-create-images-wrapper">
        <h3>Zdjęcia</h3>
        <div class="form-create-images">
          <div class="image-object">
            {{Form::label('ad_photo[0]', 'Zdjęcie:',['class' => 'label-add-img'])}}
            {{Form::file('ad_photo[0]', ['onchange' => 'loadFile(event,0)', 'multiple' => true,])}}
          </div>
          <div class="image-object">
            {{Form::label('ad_photo[0]', 'Zdjęcie:',['class' => 'label-add-img'])}}
            {{Form::file('ad_photo[0]', ['onchange' => 'loadFile(event,0)', 'multiple' => true,])}}
          </div>
          <div class="image-object">
            {{Form::label('ad_photo[0]', 'Zdjęcie:',['class' => 'label-add-img'])}}
            {{Form::file('ad_photo[0]', ['onchange' => 'loadFile(event,0)', 'multiple' => true,])}}
          </div>
          <div class="image-object">
            {{Form::label('ad_photo[0]', 'Zdjęcie:',['class' => 'label-add-img'])}}
            {{Form::file('ad_photo[0]', ['onchange' => 'loadFile(event,0)', 'multiple' => true,])}}
          </div>
        </div>
      </div>
      <div class="form-group-create">
        {!! Form::label('maxPrice', "Cena:", ['class'=>'h3']) !!}
        {!! Form::text('maxPrice', null,['class'=>'form-control'] ) !!}
      </div>
      <div class="form-group-create">
        {!! Form::label('phone', "Numer telefonu:", ['class'=>'h3']) !!}
        {!! Form::text('phone', null,['class'=>'form-control'] ) !!}
      </div>
      <div class="form-group-create">
        {!! Form::label('city', "Miasto:", ['class'=>'h3']) !!}
        {!! Form::text('city', null,['class'=>'form-control'] ) !!}
      </div>
      <div class="form-group-create">
        {!! Form::label('category', "Kategoria:", ['class'=>'h3']) !!}
        {!! Form::select('category', $categories,null, array('class' => 'form-control') ) !!}
      </div>
      <div class="form-group-create">
        {!! Form::label('body', "Treść:", ['class'=>'h3']) !!}
        {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
      </div>
      <div class="form-group-create">
        {!! Form::submit('Zapisz', ['class' => 'btn btn-success']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-primary']) !!}
      </div>
    </div>
  {!! Form::close() !!}
</div>


@endsection
@section('js')
<script type="text/javascript">
   var loadFile = function(event,numberr) {
    var output = event.target.parentNode.querySelector('label');
    output.style.backgroundImage = 'url('+URL.createObjectURL(event.target.files[0]) +')';
    // output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
@endsection