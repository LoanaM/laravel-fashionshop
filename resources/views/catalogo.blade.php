@extends('layout')

@section('main')
    <div class="container">
      <div class="presentation">
        <h1>Abiti da donna</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="wrapper dresses">

      @for ($i=0; $i < 4; $i++)
        <a href="dress/{{$i+1}}">
          <img src="{{$dress[$i]['image']}}" alt="">
        </a>
      @endfor

      </div>

    </div>
@endsection
