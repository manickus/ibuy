@extends('dashboard.layout')

@section('css')
<style>
  input[type="file"]
  {
    display: none;
  }

  .label-add-img {
    background: url('https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/512/add.png');
    background-size: cover;
     text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
    border: 1px #aeaeae dashed;
    width: 150px;
    height: 150px;
    content: "";
  }

  .image-object
  {
    margin: 10px;
  }
  </style>
@endsection

@section('content')
  <div style="border-radius: 5px;border-left: 5px solid #aeaeae;margin-top: 20px;padding-left: 15px;">
  {!! Form::open(['route' => 'ad.store' ,'files' => true,'enctype' => 'multipart/form-data']) !!}



  <div class="form-group">
    {!! Form::label('title', "Tytuł:" , ['class'=>'h3']) !!}
    {!! Form::text('title',null, ['class'=>'form-control']) !!}
  </div>

<h3>Zdjęcia: </h3> 
  <div class="row">
 <br>
  <div class="col-xs-6">
    <div class="image-object">
      {{Form::label('ad_photo[0]', 'Zdjęcie:',['class' => 'label-add-img'])}}
      {{Form::file('ad_photo[0]', ['onchange' => 'loadFile(event,0)', 'multiple' => true,])}}
    </div>
    </div>
    <div class="col-xs-6">
    <div class="image-object">
      {{Form::label('ad_photo[1]', 'Zdjęcie:',['class' => 'label-add-img'])}}
      {{Form::file('ad_photo[1]', ['onchange' => 'loadFile(event,1)', 'multiple' => true,])}}
      </div>
    </div>
    <div class="col-xs-6">
      <div class="image-object">
        {{Form::label('ad_photo[2]', 'Zdjęcie:',['class' => 'label-add-img'])}}
        {{Form::file('ad_photo[2]', ['onchange' => 'loadFile(event,2)', 'multiple' => true,])}}
      </div>
  </div>
    <div class="col-xs-6">
     <div class="image-object">
      {{Form::label('ad_photo[3]', 'Zdjęcie:',['class' => 'label-add-img'])}}
      {{Form::file('ad_photo[3]', ['onchange' => 'loadFile(event,3)', 'multiple' => true,])}}
     </div>
  </div>
    <div class="col-xs-6">
      <div class="image-object">
        {{Form::label('ad_photo[4]', 'Zdjęcie:',['class' => 'label-add-img'])}}
        {{Form::file('ad_photo[4]', ['onchange' => 'loadFile(event,4)', 'multiple' => true,])}}
      </div>
  </div>
    <div class="col-xs-6">
    <div class="image-object">
        {{Form::label('ad_photo[5]', 'Zdjęcie:',['class' => 'label-add-img'])}}
        {{Form::file('ad_photo[5]', ['onchange' => 'loadFile(event,5)', 'multiple' => true,])}}
     </div>
</div>

  </div>
<br>
  <div class="form-group">
    {!! Form::label('maxPrice', "Cena:", ['class'=>'h3']) !!}
    {!! Form::text('maxPrice', null,['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('phone', "Numer telefonu:", ['class'=>'h3']) !!}
    {!! Form::text('phone', null,['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('city', "Miasto:", ['class'=>'h3']) !!}
    {!! Form::text('city', null,['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('category', "Kategoria:", ['class'=>'h3']) !!}
    {!! Form::select('category', $categories,null, array('class' => 'form-control') ) !!}
  </div>

  <div class="form-group">
    {!! Form::label('body', "Treść:", ['class'=>'h3']) !!}
    {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
  </div>


  <div class="form-group">
    {!! Form::submit('Zapisz', ['class' => 'btn btn-success']) !!}
    {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-primary']) !!}
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