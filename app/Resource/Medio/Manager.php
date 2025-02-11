<?php
namespace App\Resource\Medio;

use App\Medio;

class Manager{

    public static function findMedioById($id){
        return Medio::select('id_medio','nom_medio','estado','caracteristica')->find($id);
    }
}