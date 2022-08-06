<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'nombre'=> 'Sucursal Santiago Centro',
                'region'=> 'Metropolitana',
                'comuna'=> 'Santiago',
                'direccion'=> 'libertador bernardo ohiggins 654',
                'status'=> '1'
            ],
            [
                'nombre'=> 'Sucursal Concepcion',
                'region'=> 'Bio Bio',
                'comuna'=> 'Concepcion',
                'direccion'=> 'Av Los Carrera 684',
                'status'=> '1'
            ],
            [
                'nombre'=> 'Sucursal Pto Montt',
                'region'=> 'Los Lagos',
                'comuna'=> 'Puerto Montt',
                'direccion'=> 'Sta Maria 643',
                'status'=> '1'
            ]
        ));
    }
}
