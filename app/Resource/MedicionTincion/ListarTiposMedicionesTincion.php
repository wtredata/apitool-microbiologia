<?php
namespace App\Resource\MedicionTincion;

use App\Mediciones;
use App\MedicionesCepaTincion;

class ListarTiposMedicionesTincion{

    public static function listadoMedicion(){
        return MedicionesCepaTincion::select('id','nombre')->get();
    }
}