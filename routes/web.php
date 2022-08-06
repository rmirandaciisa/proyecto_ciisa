<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\StockProdSucurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/', [StockController::class, 'home']);
Route::get('/producto/{id}', [ProductosController::class, 'producto']);
Route::get('/categoria', [CategoriasController::class, 'categoria']);
Route::get('/sucursal', [SucursalesController::class, 'sucursal']);
Route::get('/inicioSesion', [StockController::class, 'inicioSesion']);
Route::get('/registrarCategoria', [CategoriasController::class, 'registrarCategoria']);
Route::get('/registrarSucursal', [SucursalesController::class, 'registrarSucursal']);
Route::get('/registrarProducto', [ProductosController::class, 'registrarProducto']);

Route::post('/registrarCategoria/guardarcategoria', [
        'uses' => 'CategoriasController@guardarcategoria',
        'as' => 'guardarcategoria'
]);
Route::post('/registrarSucursal/guardarsucursal', [
    'uses' => 'SucursalesController@guardarsucursal',
    'as' => 'guardarsucursal'
]);
Route::post('/registrarProducto/guardarproducto', [
    'uses' => 'ProductosController@guardarproducto',
    'as' => 'guardarproducto'
]);
*/

Route::get('/', 'StockController@index');
Route::get('/inicioSesion', 'StockController@inicioSesion');

Route::resource('/categoria', 'CategoriasController');
Route::resource('/sucursal', 'SucursalesController');
Route::resource('/producto', 'ProductosController');
Route::resource('/stockprodsucur', 'StockProdSucurController');


