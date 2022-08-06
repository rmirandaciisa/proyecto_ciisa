<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarStockProdSucur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stockprodsucur')->insert(array(
            [ 
                'producto_id' => 1,
                'sucursal_id' => 1,
                'cantidad'=> 4
                 
            ],
            [
                'producto_id' => 2,
                'sucursal_id' => 2,
                'cantidad'=> 2
               
            ],
            [
                'producto_id' => 3,
                'sucursal_id' => 3,
                'cantidad'=> 10
                 
            ]
        ));
    }
}
