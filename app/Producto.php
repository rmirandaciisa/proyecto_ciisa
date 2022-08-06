<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function stockprodsucur(){
        return $this->hasMany(StockProdSucur::class);
    }
}
