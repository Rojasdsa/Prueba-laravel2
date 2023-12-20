@extends('template.template')

@section('title','Prueba ej1 - Proyecto - laravel')

@section('titulo-body')
    <h1 class="text-center mt-2">Proyecto</h1>
    <h3 class="text-center bg-warning">Añade un número en la URL</h3>
@endsection

@section('cuerpo')
<div class="container fluid card mb-3 text-center">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://pbs.twimg.com/media/DtqUcYDWsAEijkM?format=jpg&name=medium" class="img-fluid rounded-start" alt="Card title">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Tarjeta de prueba</h5>
          <p class="card-text">Una card. Sin más</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
@endsection
