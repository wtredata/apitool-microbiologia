<?php
namespace App\Resource\PruebaSensibilidad;

use App\Prueba;

class Manager{


    public static function findPruebaById($id){
        return Prueba::select('id_prueba','nom_prueba','estado_id')->find($id);
    }
}