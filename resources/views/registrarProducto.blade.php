@extends('layouts.master')

@section('content')

<div class="shadow-lg p-5 mb-3 mt-5 bg-dark text-success rounded"> 
                <h1 class="text-center">Registrar Productos</h1>
            </div>
                

            <div class="container">
                <div class="row">
                    <div class="col">               
                        <div class="shadow-lg p-4 mb-3 mt-1 bg-dark rounded">                                    
                            <div class="p-3 mb-2 bg-success bg-gradient fw-bold text-white text-center">Ingresar datos del producto</div>
                            <form class="row g-4" method="POST" action="{{  url('/producto') }}">
                                <div class="col-md-12">
                                    <label for="codprod" class="form-label text-light">Codigo producto</label>
                                    <input type="text" class="form-control" id="codprod" name="codigo" placeholder="12345" required>    
                                </div>
                                <div class="col-md-12">
                                    <label for="nombreprod" class="form-label text-light">Nombre producto</label>
                                    <input type="text" class="form-control" id="nombreprod" name="nombre" placeholder="Ingrese nombre del producto" required>  
                                </div> 
                                <div class="col-md-12">
                                <label for="categoriaprod" class="form-label text-light">Categoria producto</label>
                                <select class="form-select" aria-label="Default select example" name="categoria">
                                        <option selected>Seleccione Categoria</option>
                                        @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </select>  
                                </div> 
                                <div class="col-md-12">
                                    <label for="sucursalprod" class="form-label text-light">Sucursal</label>
                                    <select class="form-select" aria-label="Default select example" name="sucursal">
                                        <option selected>Seleccione Sucursal</option>
                                        @foreach($sucursales as $sucursal)
                                        <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                                        @endforeach
                                    </select>    
                                </div>  
                                <div class="col-md-12">
                                    <label for="descripcionprod" class="form-label text-light">Descripcion producto</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion del producto" required>    
                                </div>  
                                <div class="col-md-12">
                                    <label for="cantidadprod" class="form-label text-light">Cantidad producto</label>
                                    <input type="text" class="form-control" id="cantidadprod" name="cantidad" placeholder="Ingrese cantidad del producto" required>    
                                </div> 
                                <div class="col-md-12">
                                    <label for="precioprod" class="form-label text-light">Precio venta producto</label>
                                    <input type="text" class="form-control" id="precioprod" name="precio" placeholder="Ingrese precio del producto" required>    
                                </div>                               
                                <button class="btn btn-success fw-bold" type="submit">Registrar</button> 
                           
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>

@stop