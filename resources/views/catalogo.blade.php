@extends('layout')

@section('main')
    <div class="container">
      <div class="presentation">
        <h1>Abiti da donna</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="wrapper dresses">

        <a href="dress/1">
          <img src="{{$dress[0]['image']}}" alt="">
        </a>
        <a href="dress/2">
          <img src="{{$dress[1]['image']}}" alt="">
        </a>
        <a href="dress/3">
          <img src="{{$dress[2]['image']}}" alt="">
        </a>
        <a href="dress/4">
          <img src="{{$dress[3]['image']}}" alt="">
        </a>
      </div>
      
    </div>
@endsection
