<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'categorias';

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
