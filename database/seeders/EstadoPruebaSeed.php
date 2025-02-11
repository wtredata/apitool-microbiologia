<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoPruebaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = ['Activo','Inactivo'];
        foreach($estados as $estado){
            DB::table('estados_prueba')->insert([
                'nombre'=>$estado
            ]);
        }
    }
}
