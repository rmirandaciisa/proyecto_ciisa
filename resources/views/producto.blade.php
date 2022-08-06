@extends('layouts.master')

@section('content')

<div class="shadow-lg p-5 mb-3 mt-5 bg-dark text-success rounded"> 
    <h1 class="text-center">Productos</h1>
</div>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col" class="text-uppercase">Codigo Producto <form class="d-flex  mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
     
      <th scope="col" class="text-uppercase">Nombre Producto <form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Categoria<form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Sucursal<form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Descripcion<form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Cantidad<form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Precio Venta<form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-center text-uppercase p-5">Edicion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($stockprodsucur as $stock)
          <tr>
            <th scope="row">{{ $stock->productos->codigo }}</th>
            <td>{{ $stock->productos->nombre }}</td>
            <td>{{ $stock->productos->categorias->nombre }}</td>
            <td>{{ $stock->sucursales->nombre }}</td>
            <td>{{ $stock->productos->descripcion }}</td>
            <td>{{ $stock->cantidad }}</td>
            <td>{{ $stock->productos->precio }}</td>
            
            <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-primary">Editar</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
              </div></td>
          </tr>
    @endforeach
  </tbody>
</table>

@stop