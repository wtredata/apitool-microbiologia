<?php
namespace App\Resource\MedicionPrueba;

use App\Mediciones;
use App\MedicionesPrueba;

class ListarTiposMedicionesPrueba{

    public static function listadoMedicion(){
        return MedicionesPrueba::select('id','nombre')->get();
    }
}