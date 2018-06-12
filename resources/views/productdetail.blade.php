@extends('layout')

@section('main')
  <div class="wrapper">

    <h2>{{$dress['name']}}</h2>
    <h3>{{$dress['brand']}}</h3>
    <div class="foto">
      <img src="{{$dress['image']}}" alt="">
    </div>
    <div class="descriptdress">
      {{$dress['description']}}
      <p><br>€&nbsp{{$dress['price']}}</p>
    </div>

  </div>

@endsection
