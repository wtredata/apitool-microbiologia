<?php
namespace App\Resource\Tincion;

use App\Tincion;

class Manager{

    public static function findTincionById($id){
        return Tincion::select('id_tincion','nom_tincion','estado')->find($id);
    }
}