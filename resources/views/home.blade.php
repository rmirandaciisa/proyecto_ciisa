@extends('layouts.master')

@section('content')

<div class="row row-cols-1 row-cols-md-2 g-4 m-4">
  <div class="col">
    <div class="card">
      <img src="https://impomarejo.com/uploads/sin_imagen.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Producto 1 Destacado</h5>
        <p class="card-text">Descripcion del producto 1</p>
        <p class="card-text"><small class="text-muted">Stock 5</small></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://impomarejo.com/uploads/sin_imagen.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Producto 2 Destacado</h5>
        <p class="card-text">Descripcion del producto 2</p>
        <p class="card-text"><small class="text-muted">Stock 2</small></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://impomarejo.com/uploads/sin_imagen.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Producto 3 Destacado</h5>
        <p class="card-text">Descripcion del producto 3</p>
        <p class="card-text"><small class="text-muted">Stock 1</small></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://impomarejo.com/uploads/sin_imagen.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Producto 4 Destacado</h5>
        <p class="card-text">Descripcion del producto 4</p>
        <p class="card-text"><small class="text-muted">Stock 7</small></p>
      </div>
    </div>
  </div>
</div>

@stop