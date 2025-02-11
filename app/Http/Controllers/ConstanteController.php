<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use App\Sede;
use Illuminate\Support\Facades\DB;
use App\AnalitoLaboratorio;
use App\ControlLaboratorio;

class ConstanteController extends Controller
{


  public function __construct()
  {
  }


  public static function getBySede($id_sede)
  {
    $sede = new Sede();
    $constante_raw = $sede
      ->select('institucion.constante_z')
      ->join("institucion", "institucion.id_institucion", "=", "sede.institucion_id_institucion");

    if (!in_array($id_sede, ["all", ""])) {
      $constante_raw->where('sede.id_sede', $id_sede);
    }
    return $constante_raw->first()->constante_z;;

  }

  public static function getByAnalitoLaboratorio($id_analito_laboratorio)
  {
    $tableAnalitoLab = new AnalitoLaboratorio();
    $cont_z = $tableAnalitoLab
      ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
      ->join("laboratorio", "laboratorio.id_laboratorio", "=", "control_laboratorio.laboratorio_id_laboratorio")
      ->join("sede", "sede.id_sede", "=", "laboratorio.sede_id_sede")
      ->join("institucion", "institucion.id_institucion", "=", "sede.institucion_id_institucion")
      ->where("analito_lab.id_analito_lab", $id_analito_laboratorio)
      ->first()
      ->constante_z;

    return floatval($cont_z);
  }


  public static function getByControlLaboratorio($id_control_laboratorio)
  {
    $tableControlLab = new ControlLaboratorio();
    $cont_z = $tableControlLab
      ->join("laboratorio", "laboratorio.id_laboratorio", "=", "control_laboratorio.laboratorio_id_laboratorio")
      ->join("sede", "sede.id_sede", "=", "laboratorio.sede_id_sede")
      ->join("institucion", "institucion.id_institucion", "=", "sede.institucion_id_institucion")
      ->where("control_laboratorio.id_control_laboratorio", $id_control_laboratorio)
      ->first()
      ->constante_z;
    return floatval($cont_z);
  }
}
