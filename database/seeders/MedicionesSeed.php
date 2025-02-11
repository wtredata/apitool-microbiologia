<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mediciones = ['Crecimiento','No crecimiento'];
        foreach($mediciones as $medicion){
            DB::table('mediciones')->insert([
                'nombre'=>$medicion
            ]);
        }
    }
}
