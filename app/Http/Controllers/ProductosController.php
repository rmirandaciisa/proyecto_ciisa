<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Sucursal;
use App\StockProdSucur;
use App\Categoria;

class ProductosController extends Controller
{
  
    public function index(){
        
        $stockprodsucur = StockProdSucur::get();
        return view('producto',[
            'stockprodsucur' => $stockprodsucur
        ]);

    }
    
    public function store(Request $request){
        $this->validate($request,[
            'codigo' => 'required',
            'nombre' => 'required',
            'categoria' => 'required',
            'sucursal' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required'
        ]);
        //dd($request);

        $producto = new Producto();
        $producto->codigo = $request->codigo;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria;
        $producto->status = 1;
        $producto->save();

        $stockprodsucur = new StockProdSucur();
        $stockprodsucur->producto_id = $producto->id;
        $stockprodsucur->sucursal_id = $request->sucursal;
        $stockprodsucur->cantidad = $request->cantidad;
        $stockprodsucur->save();

        $stockprodsucur = StockProdSucur::get();
        return view('producto',[
            'stockprodsucur' => $stockprodsucur
        ]);
    }
    
    public function create(){

        $categorias = Categoria::get();
        $sucursales = Sucursal::get();
        return view('registrarProducto',[
            'categorias' => $categorias,
            'sucursales' => $sucursales
        ]);
    }
    
}
