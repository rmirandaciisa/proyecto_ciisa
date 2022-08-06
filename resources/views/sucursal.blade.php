@extends('layouts.master')

@section('content')

<div class="shadow-lg p-5 mb-3 mt-5 bg-dark text-success rounded"> 
    <h1 class="text-center">Sucursales</h1>
</div>

<div class="row">
   <table class="table mt-5">
  <thead class="table-dark">
    <tr>
      <th scope="col" class="text-uppercase">Codigo Sucursal<form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
     
      <th scope="col" class="text-uppercase">Nombre Sucursal <form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Region <form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Comuna <form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Direccion <form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-center text-uppercase p-4">Edicion</th>
    </tr>
  </thead>
  <tbody>
      @foreach($sucursales as $sucursal)
        <tr>
          <th scope="row">{{ $sucursal->id }}</th>
          <td>{{ $sucursal->nombre }}</td>
          <td>{{ $sucursal->region }}</td>
          <td>{{ $sucursal->comuna }}</td>
          <td>{{ $sucursal->direccion }}</td>
          <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-primary">Editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
            </div></td>
        </tr>
      @endforeach
  </tbody>
</table>
@stop