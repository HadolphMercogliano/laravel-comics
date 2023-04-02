@extends('layouts.app')

@section('title', 'Lista fumetti')

@section('comics-list')
<div class="container">
  <div class="row py-4">
    @foreach ($comics as $comic)
    <div class="col-2">
      <a href="">
        <img class=" py-3" src="https://picsum.photos/150/200?random=" alt="">
        <h4>{{ $comic['series'] }}</h4>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection