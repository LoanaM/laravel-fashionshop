@extends('layout')

@section('main')
  <div class="wrapper">
    
    <h2>{{$dress['name']}}</h2>
    <div class="foto">
      <img src="{{$dress['image']}}" alt="">
    </div>
    <div class="descriptdress">
      {{$dress['description']}}
    </div>

  </div>

@endsection
