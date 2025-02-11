<?php

namespace App\Http\Controllers;

// Controladores
use App\Analito;
use App\Http\Controllers\Controller;

// Helpers
use App\Helpers\FechaDinamica;

/*
use App\Http\Controllers\CorridaAreaController;
use App\Http\Controllers\AnalitoController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\ModoController;
use App\Http\Controllers\UnidadController;
*/

// Requests
use Illuminate\Http\Request;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Log;
use App\Titulo;

class AuditoriaController extends Controller
{

    protected $tableLog;

    public function __construct()
    {
        $this->tableLog = new Log();
    }

    public function section(Request $req)
    {

        $dia_actual = Date("Y-m-d");
        $fecha_inicial = FechaDinamica::RestarDias($dia_actual, "30");
        $fecha_final = $dia_actual;

        $laboratorios = LaboratorioController::listByUsuario();
        $acciones = self::listAcciones();

        $analitos = AnalitoController::listAnalitos();

        return view("auditoria.auditoriaSection")
            ->with("nomSection", "SeeSectionAuditoria")
            ->with("laboratorios", $laboratorios)
            ->with("analitos", $analitos)
            ->with("fecha_inicial", $fecha_inicial)
            ->with("fecha_final", $fecha_final)
            ->with("acciones", $acciones);
    }

    public static function listAcciones()
    {
        $tableTitulo = new Titulo();
        return $tableTitulo
            ->orderBy("titulo.nom_titulo", "asc")
            ->get();
    }


    public function index(Request $req)
    {
        $historicos = self::list($req->laboratorio, $req->accion, $req->fecha_inicial, $req->fecha_final);
        return view("auditoria.auditoriaIndex")
            ->with("historicos", $historicos);
    }


    public static function list($laboratorio, $acciones, $fecha_inicial, $fecha_final)
    {
        $tableLog = new Log();
        $logs = $tableLog
            ->join("titulo", "titulo.id_titulo", "=", "log.titulo_id_titulo")
            ->where([
                ["log.fecha", ">=", $fecha_inicial],
                ["log.fecha", "<=", FechaDinamica::HoraNocturna($fecha_final)],
//                ["log.titulo_id_titulo", "in", $acciones],
                ["log.num_laboratorio", "=", $laboratorio]
            ]);
        if (is_null($acciones) or in_array("-1", $acciones))
        {
            return $logs->get();
        }
        return $logs
            ->whereIn("log.titulo_id_titulo", $acciones)
            ->get();
    }
}
