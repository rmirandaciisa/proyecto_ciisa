@extends('layouts.master')

@section('content')

<div class="shadow-lg p-5 mb-3 mt-5 bg-dark text-success rounded"> 
    <h1 class="text-center">Categorias</h1>
</div>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col" class="text-uppercase">Codigo Categoria <form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-uppercase">Nombre Categoria <form class="d-flex mt-3" role="search">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
      </form></th>
      <th scope="col" class="text-center text-uppercase p-5">Edicion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categorias as $categoria)
      <tr>
        <th scope="row">{{ $categoria->id }}</th>
        <td>{{ $categoria->nombre }}</td>
        <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" class="btn btn-primary">Editar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
          </div></td>
      </tr>
    @endforeach
  </tbody>
</table>

@stop