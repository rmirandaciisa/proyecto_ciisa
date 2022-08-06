<?php

use Illuminate\Database\Seeder;

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
                'cantidad'=> 4,
                'precio'=> 600000,
                'descripcion'=> 'computador portatil marca lenovo',
                'imagen'=> 'https://m.media-amazon.com/images/I/51mSFH3B8aL._AC_SL1000_.jpg',
                'sucursal_id' => 1
            ],
            [
                'codigo'=> 'xx001',
                'nombre'=> 'mouse',
                'categoria_id'=> '2',
                'cantidad'=> 14,
                'precio'=> 6000,
                'descripcion'=> 'mouse generico',
                'imagen'=> 'https://tolivmarket-production.s3.sa-east-1.amazonaws.com/products/05a13a1d510deddfb6a7bd12d9d8c4eda7928f1859ae747a1bb8046caad9394f.jpg',
                'sucursal_id' => 1
            ],
            [
                'codigo'=> 'xx002',
                'nombre'=> 'teclado',
                'categoria_id'=> '2',
                'cantidad'=>  18,
                'precio'=> 7000,
                'descripcion'=> 'teclado generico',
                'imagen'=> 'https://www.nicepng.com/png/detail/828-8281821_generic-grey-impact-700-gaming-keyboard-mechanical-keyboard.png',
                'sucursal_id' => 2
            ],            [
                'codigo'=> 'xx003',
                'nombre'=> 'laptop dell',
                'categoria_id'=> '1',
                'cantidad'=> 6,
                'precio'=> 700000,
                'descripcion'=> 'computador portatil marca dell',
                'imagen'=> 'https://images.pcel.com/mp/Computadoras-Laptops-DELL-0XRHT-406184-tS5iSXtUmlBXPxSI.jpg',
                'sucursal_id' => 2
            ],            [
                'codigo'=> 'xx004',
                'nombre'=> 'laptop apple',
                'categoria_id'=> '1',
                'cantidad'=> 2,
                'precio'=> 1000000,
                'descripcion'=> 'computador portatil marca apple',
                'imagen'=> 'https://home.ripley.cl/store/Attachment/WOP/D113/2000391314791/2000391314791_2.jpg',
                'sucursal_id' => 3
            ],
            [
                'codigo'=> 'xx005',
                'nombre'=> 'webcam',
                'categoria_id'=> '2',
                'cantidad'=> 4,
                'precio'=> 14000,
                'descripcion'=> 'webcam generica',
                'imagen'=> 'https://images.pcliquidations.com/images/isaac/125/125607t550.jpg',
                'sucursal_id' => 3
            ]

        ));
    }
}
