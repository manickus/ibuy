@extends('dashboard.layout')

@section('content')

<div>
  <div style="border-radius: 5px;border-left: 5px solid #aeaeae;margin-top: 20px;padding-left: 15px;">
  {!! Form::model($ad,['route' => ['ad.update',$ad] , 'files' => true,'enctype' => 'multipart/form-data','method' => 'PUT']) !!}



  <div class="form-group">
    {!! Form::label('title', "Tytuł:") !!}
    {!! Form::text('title',$ad->title, ['class'=>'form-control']) !!}
  </div>



  <div class="form-group">
    {!! Form::label('maxPrice', "Cena:") !!}
    {!! Form::text('maxPrice', $ad->maxprice,['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('phone', "Numer telefonu:") !!}
    {!! Form::text('phone', $ad->phone,['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('city', "Miasto:") !!}
    {!! Form::text('city', $ad->city,['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('category', "Kategoria:") !!}
    {!! Form::select('category', $categories, array('class' => 'form-control') ) !!}
  </div>

  <div class="form-group">
    {!! Form::label('body', "Treść:") !!}
    {!! Form::textarea('body',$ad->body, ['class'=>'form-control']) !!}
  </div>


  <div class="form-group">
    {!! Form::submit('Zapisz', ['class' => 'btn btn-success']) !!}
    {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-primary']) !!}
  </div>
  {!! Form::close() !!}
<div>



</div>

<div>
<h2>Zdjęcia: </h2>

     @if($ad->photos)
                    @foreach (array_chunk($ad->photos->all(), 4) as $photoRow)

                    <div class="row">
                      @foreach ($photoRow as $photo)



                        <div class="col-md-4">
                         <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="{{asset($photo->filename)}}" alt="Card image cap" style="max-height: 220px;">
                            <div class="card-block">
                             
                              <a href="#" class="btn btn-warning">Usuń</a>
                               </div>
                         </div>
                        </div>
                      @endforeach
                     

    
                      </div>
                    @endforeach
     @endif
</div>
@endsection
