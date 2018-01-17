@extends('dashboard.layout')

@section('css')
      <link rel=stylesheet href="{{ asset('css/product.css')}}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css">
      <link rel=stylesheet href="{{ asset('css/lightslider.css')}}">
  <link rel=stylesheet href="{{ asset('css/showad.css')}}">
  
@endsection

@section('content')

        	<div class="row">
               <div class="col-md-7" >
            {{--      @if($ad->photos)
                    <ul id="lightslider">
                    @foreach ($ad->photos as $photo)
                    <li data-thumb="{{asset($photo->filename)}}">
                    <img src="{{asset($photo->filename)}}" style="max-height: 400px;" >
                    </li>
                    @endforeach
                    </ul>
                @else
                    <img style="max-width:100%;" src="{{asset('adphotos/nophoto.png')}}"  />
                @endif --}}
                @if($ad->photos)
                <div id="slider">
  <ul>
  @foreach ($ad->photos as $photo)
    <li>  <a style="top: 0" href="{{asset($photo->filename)}}" data-toggle="lightbox" data-gallery="example-gallery">
    <img class="img-slider" src="{{asset($photo->filename)}}">
    </a>
    </li>
  @endforeach
  
  </ul>
  <a href="#" id="sliderNext">></a>
  <a href="#" id="sliderPrev" style="margin-left: 25px"><</a>
</div>
@else
<img style="max-width:100%;" src="{{asset('adphotos/nophoto.png')}}"  />
@endif
                </div>
                <div class="col-md-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{ $ad->title }}</h3>
                    <h5 style="color:#337ab7">Kategoria  <a href="/category/{{$ad->category->slug}}">{{$ad->category->name}}</a> </h5>

                    <!-- Precios -->
                    <h6 class="title-price"><small>Cena</small></h6>
                    <h3 style="margin-top:0px;">{{ number_format($ad->maxprice , 2, ","," ") }} zł</h3>

                    <!-- Detalles especificos del producto -->

                    @if ($ad->phone)
                    <div class="section" style="padding-bottom:5px;">
                        <strong>Nr telefonu: </strong> {{$ad->phone}}
                    </div>
                  @endif
                  @if ($ad->city)
                  <div class="section" style="padding-bottom:5px;">
                      <strong>Miasto: </strong> {{$ad->city}}
                  </div>
                @endif

                <div class="section" style="padding-bottom:5px; margin-top: ">
                    <strong>Email: </strong> {{$ad->user->email}}
                </div>
                

@if(\Laratrust::hasRoleAndOwns('user', $ad) || \Laratrust::hasRoleAndOwns('superadministrator', $ad))
                <div class="section" style="padding-bottom: 5px;">

                <div class="btn-group">
                    {!! Form::model($ad,['route' => ['ad.edit',$ad] ,'method' => 'GET']) !!}
                     {!! Form::submit('Edytuj', ['class' => 'btn btn-warning mrg-5']) !!}
                  {!! Form::close() !!}
                    {!! Form::model($ad,['route' => ['ad.destroy',$ad] ,'method' => 'DELETE']) !!}
                     {!! Form::submit('Usuń', ['class' => 'btn btn-danger mrg-5']) !!}
                  {!! Form::close() !!}
                </div>
                 

                </div>
@else
       <div class="section" style="padding-bottom: 5px;">
           <strong>Ulubione:</strong> <a href="{{ route('ad.favorite', ['ad' => $ad->id ])}}">
           @if($favorite)
            <i class="fa fa-star favorite" aria-hidden="true" ></i>
           @else
             <i class="fa fa-star nofavorite" aria-hidden="true"></i>
           @endif

 </a>
       </div>

@endif



                </div>

                <div class="col-md-12" style="margin-top: 5px">

                    <div style="width:100%;border-top:1px solid silver;border-bottom:1px solid silver"">
                        <p style="padding:15px;">
                            {!! nl2br(e($ad->body)) !!}
                        </p>
 
                        <p class="pull-right" style="margin-right: 2em;">
                          <strong>Wyświetleń: </strong> {{$ad->page_visits_formatted}}
                        </p>
                         

                    </div>
                </div>
            </div>

            @include('messages.wrapper');


@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js" integrity="sha256-ATNbEkamp1Wir/Ku1zX6Es+mKR7h08bnn8IRosp26Jo=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
      onNavigate: function(direction, itemIndex) {
        console.log('Navigating '+direction+'. Current item: '+itemIndex);
    },
    });

});
</script>

     <script type="text/javascript" src="{{ asset('js/lightslider.js')}}"></script> 
 <script type="text/javascript">
 
      $(function(){
  var slider = $('#slider');
  console.log(slider);
  var sliderWrap = $('#slider ul');
  var sliderImg = $('#slider ul li');
  var prevBtm = $('#sliderPrev');
  var nextBtm = $('#sliderNext');
  var length = sliderImg.length;
  var width = 540;
  var thumbWidth = 135;
  var thumbHeight = 135;

  sliderWrap.width(width*(length+2));

  //Set up
  slider.after('<div id="' + 'pager' + '"></div>');
  var dataVal = 1;
  sliderImg.each(
    function(){
      $(this).attr('data-img',dataVal);
      $('#pager').append('<a data-img="' + dataVal + '"><img src=' + $('img', this).attr('src') + ' height='+thumbHeight+' width=' + thumbWidth + '></a>');
    dataVal++;
  });
  
  //Copy 2 images and put them in the front and at the end
  $('#slider ul li:first-child').clone().appendTo('#slider ul');
  $('#slider ul li:nth-child(' + length + ')').clone().prependTo('#slider ul');

  sliderWrap.css('margin-left', - width);
  $('#slider ul li:nth-child(2)').addClass('active');

  var imgPos = pagerPos = $('#slider ul li.active').attr('data-img');
  $('#pager a:nth-child(' +pagerPos+ ')').addClass('active');


  //Click on Pager  
  $('#pager a').on('click', function() {
    pagerPos = $(this).attr('data-img');
    $('#pager a.active').removeClass('active');
    $(this).addClass('active');

    if (pagerPos > imgPos) {
      var movePx = width * (pagerPos - imgPos);
      moveNext(movePx);
    }

    if (pagerPos < imgPos) {
      var movePx = width * (imgPos - pagerPos);
      movePrev(movePx);
    }
    return false;
  });

  //Click on Buttons
  nextBtm.on('click', function(){
    moveNext(width);
    return false;
  });

  prevBtm.on('click', function(){
    movePrev(540);
    return false;
  });

  //Function for pager active motion
  function pagerActive() {
    pagerPos = imgPos;
    $('#pager a.active').removeClass('active');
    $('#pager a[data-img="' + pagerPos + '"]').addClass('active');
  }

  //Function for moveNext Button
  function moveNext(moveWidth) {
    sliderWrap.animate({
        'margin-left': '-=' + moveWidth
        }, 540, function() {
          if (imgPos==length) {
            imgPos=1;
            sliderWrap.css('margin-left', - width);
          }
          else if (pagerPos > imgPos) {
            imgPos = pagerPos;
          } 
          else {
            imgPos++;
          }
          pagerActive();
      });
  }

  //Function for movePrev Button
  function movePrev(moveWidth) {
    sliderWrap.animate({
        'margin-left': '+=' + moveWidth
        }, 540, function() {
          if (imgPos==1) {
            imgPos=length;
            sliderWrap.css('margin-left', -(width*length));
          }
          else if (pagerPos < imgPos) {
            imgPos = pagerPos;
          } 
          else {
            imgPos--;
          }
          pagerActive();
      });
  }

  sliderImg.on('click',function(event) {
    console.log(event.target.src);
  });

});
  

 </script>
@endsection