<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicionesPruebaSeed extends Seeder{


    public function run()
    {
        $mediciones = ['Sensible ','Resistente'];
        foreach($mediciones as $medicion){
            DB::table('mediciones_cepas_prueba')->insert([
                'nombre'=>$medicion
            ]);
        }
    }
}