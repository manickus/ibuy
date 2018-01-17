@extends('dashboard.layout')

@section('content')

<div>
  <div style="border-radius: 5px;border-left: 5px solid #aeaeae;margin-top: 20px;padding-left: 15px;">
    <div class="images">
      <h5>Zdjęcia</h5>
        <div class="row">
           @if(count($ad->photos)) 
            @foreach($ad->photos as $photo)
              <div class="col-md-2 text-center">
                <img src="{{asset($photo->filename)}}" width="150" height="150">
                <button class="btn btn-danger text-center" data-id="{{ $photo->id }}" onclick="deleteImg(this)">Usuń</button>
              </div>
            @endforeach
          @endif
          @for($i = 0; $i < 4 - count($ad->photos); $i++)
            <div class="col-md-2 text-center">
              <div>
                <form>
                  <div>
                    <label for="{{ $i }}" class="label-add-img"></label>
                    <input type="file" id="{{ $i }}" onchange="changeImg(this)" name="photo">
                </form>
              </div>
            </div>
          @endfor
        </div>
      </div>
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



@endsection


@section('js')
    

    <script type="text/javascript">
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    function changeImg(photos) {
    var adId = {{ $ad->id }};
    var photo = photos.files[0];
    var a = $(photos.parentNode);
    var file_data = $(photos).prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('id',adId);
      
    
          $.ajax({
     url: "/update-photo-ajax",
            type: "POST",
            dataType: "JSON",
               cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function(results){
              photos.parentNode.parentNode.innerHTML = 
              `
                  <img src="http://127.0.0.1:8000/${results.data.filename}" width="200" height="200">
    <button class="btn btn-danger text-center" data-id="${results.data.id}" onclick="deleteImg(this)">Usuń</button>
              `;
            }
    });
  } 

  


  function deleteImg(photos)
  {
    var photoId = photos.getAttribute('data-id');
    $.ajax({
     url: "/delete-photo-ajax",
            type: "POST",
            dataType: "JSON",
            data: {photoId: photoId},
            success: function(results){
              photos.parentNode.innerHTML = 
              `
               <div>
                <label for="results" class="label-add-img"></label>
                <input type="file" id="results" onchange="changeImg(this)" name="photo">
              </div>
              `
            }
    });
  } 


    </script>

@endsection