<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        return view('home');
    }

    public function inicioSesion(){
        return view('inicioSesion');
    }

}
