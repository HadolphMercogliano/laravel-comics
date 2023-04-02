@extends('layouts.app')

@section('title', 'Lista fumetti')

@section('comics-list')
<div class="container">
  <div class="row">
    @foreach ($comics as $comic)
    <div class="col-3">

    </div>
    @endforeach
  </div>
</div>
@endsection