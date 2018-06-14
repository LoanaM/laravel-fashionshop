@extends('layout')

@section('title')
  Catalogo
@endsection

@section('main')
    <div class="container">

      <div class="presentation">
        <h1>Abiti da donna</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

      {{-- Form pe inserire nuovo abito --}}
      <form class="" action="{{route('add')}}" method="POST">
        @csrf
        <input type="text" name="name" value="" placeholder="Inserisci un nuovo modello"><br>
        <input type="text" name="brand" value="" placeholder="Inserisci la marca">
        <input type="text" name="description" value="" placeholder="Inserisci descrizione">
        <input type="text" name="price" value="" placeholder="Inserisci prezzo">
        <input type="text" name="image" value="" placeholder="Inserisci immagine">
        <input type="submit">
      </form>

      <div class="wrapper dresses">
         {{-- soluzione con ciclo for --}}
          {{-- @for ($i=0; $i < 4; $i++)
            <a href="dress/{{$i+1}}">
              <img src="{{$dresses[$i]['image']}}" alt="">
            </a>
          @endfor --}}

          {{-- soluzione con foreach --}}
          @foreach ($dresses as $product)
            <a href="{{route('dr',['id'=>$product['id']])}}">
              <img src="{{$product['image']}}" alt="">
            </a>
          @endforeach
      </div>

    </div>
@endsection
