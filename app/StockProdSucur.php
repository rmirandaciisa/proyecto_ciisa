<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockProdSucur extends Model
{
    protected $table = 'stockprodsucur';
    protected $primaryKey = 'id';

    public function sucursales(){
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }
    public function productos(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }
    
}
