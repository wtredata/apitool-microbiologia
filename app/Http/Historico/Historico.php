<?php

namespace App\Http\Historico;

// Modelos
use App\Log;

// Sesion
use Auth;

class Historico {

    protected static $accion;
    protected static $req;
    protected static $tableLog;
    protected static $nom_usuario;
    
    
    public static function SetInformacionLog($accion, $req){ 
        self::$tableLog = new Log();
        self::$nom_usuario = Auth::user()->nom_usuario;
        self::$tableLog->usuario = self::$nom_usuario;
        self::$tableLog->fecha = Date("Y-m-d H:i:s");
        self::$accion = $accion;
        self::$req = $req;
    }
}