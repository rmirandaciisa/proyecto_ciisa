<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(  
            [
                'codigo'=> 'xx000',
                'nombre'=> 'laptop lenovo',
                'categoria_id'=> '1',
                'descripcion'=> 'computador portatil marca lenovo',
                'status'=> '1',
                'precio'=> 600,
            ],
            [
                'codigo'=> 'xx001',
                'nombre'=> 'mouse',
                'categoria_id'=> '2',
                'descripcion'=> 'mouse generico',
                'status'=> '1',
                'precio'=> 6000,
              
            ],
            [
                'codigo'=> 'xx002',
                'nombre'=> 'teclado',
                'categoria_id'=> '2',
                'descripcion'=> 'teclado generico',
                'status'=> '1',
                'precio'=> 60000,
            ],           

        ));
    }
}
