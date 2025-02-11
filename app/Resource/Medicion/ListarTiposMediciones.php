<?php
namespace App\Resource\Medicion;

use App\Mediciones;

class ListarTiposMediciones{


    public static function listadoMedicionCrecimiento(){
        return Mediciones::select('id','nombre')->get();
    }
}