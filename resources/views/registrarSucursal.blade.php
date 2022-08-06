@extends('layouts.master')

@section('content')

<div class="shadow-lg p-5 mb-3 mt-5 bg-dark text-success rounded"> 
                <h1 class="text-center">Registrar Sucursales</h1>
            </div>
                

            <div class="container">
                <div class="row">
                    <div class="col">               
                        <div class="shadow-lg p-4 mb-3 mt-1 bg-dark rounded">                                    
                            <div class="p-3 mb-2 bg-success bg-gradient fw-bold text-white text-center">Ingresar datos de Sucursal</div>
                            <form class="row g-4" method="POST" action="{{ url('/sucursal')}}">
                                <div class="col-md-12">
                                    <label for="nombresucursal" class="form-label text-light">Nombre de sucursal</label>
                                    <input type="text" class="form-control" id="nombresucursal" name="nombre" placeholder="Nombre de sucursal" required>    
                                </div>
                                <div class="col-md-12">
                                    <label for="region" class="form-label text-light">Region</label>
                                    <input type="text" class="form-control" id="region" name="region" placeholder="Ingrese region, ej: Region metropolitana" required>  
                                </div> 
                                <div class="col-md-12">
                                    <label for="comuna" class="form-label text-light">Comuna</label>
                                    <input type="text" class="form-control" id="comuna" name="comuna" placeholder="Ingrese comuna, ej: Las condes" required>    
                                </div> 
                                <div class="col-md-12">
                                    <label for="direccion" class="form-label text-light">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Direccion, ej: Av. las condes" required>    
                                </div>                               
                                <button class="btn btn-success fw-bold" type="submit">Registrar</button> 
                           
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>

@stop