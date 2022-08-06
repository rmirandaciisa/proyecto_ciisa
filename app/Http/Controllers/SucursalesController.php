<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();
        return view('sucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'region' => 'required',
            'comuna' => 'required',
            'direccion' => 'required'
        ]);

        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->region = $request->region;
        $sucursal->comuna = $request->comuna;
        $sucursal->direccion = $request->direccion;
        $sucursal->status = 1;

        $sucursal->save();

        $sucursales = Sucursal::get();
        return view('sucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function create(){
        return view('registrarSucursal');
    }

}
