<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    protected $primaryKey = 'id';

    public function sucursal(){
        return $this->hasMany(StockProdSucur::class);
    }
}
