@extends('dashboard.layout')
@section('content')
<div class="row">
  <ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile.show')}}">Oferty</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('profile.messages')}}">Wiadomości</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile.favorites')}}">Ulubione</a>
  </li>
 
</ul>
</div>
 

 <h1> Wiadomości </h1>
 lol
   
@endsection
