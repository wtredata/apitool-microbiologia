<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicionesCepaTincionSeed extends Seeder{

    public function run()
    {
        $mediciones = ['Cumple ','No Cumple'];
        foreach($mediciones as $medicion){
            DB::table('mediciones_cepas_tincion')->insert([
                'nombre'=>$medicion
            ]);
        }
    }
}