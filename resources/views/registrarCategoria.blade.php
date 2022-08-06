@extends('layouts.master')

@section('content')

<div class="shadow-lg p-5 mb-3 mt-5 bg-dark text-success rounded"> 
                <h1 class="text-center">Registrar Categorias</h1>
            </div>
                
            <div class="container">
                <div class="row">
                    <div class="col">               
                        <div class="shadow-lg p-4 mb-3 mt-1 bg-dark rounded">                                    
                            <div class="p-3 mb-2 bg-success bg-gradient fw-bold text-white text-center">Ingresar datos de la categoria</div>
                            <form class="row g-4" method="POST" action="{{ url('/categoria')}}">
                                <div class="col-md-12">
                                    <label for="nombrecategoria" class="form-label text-light">Nombre Categoria</label>
                                    <input type="text" class="form-control" id="nombrecategoria" name="nombre" placeholder="ingresar nombre de categoria" required>    
                                </div>                               
                                <button class="btn btn-success fw-bold" type="submit">Registrar</button> 
                           
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>

@stop