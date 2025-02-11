<?php

namespace App\Resource\EstadosPrueba;

use App\EstadoPrueba;

class ListarEstados{


    public static function listar(){
        return EstadoPrueba::select('id','nombre')->get();
    }
}