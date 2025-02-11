<?php

namespace App\Http\Controllers;

use App\Helpers\FechaDinamica;
use Illuminate\Http\Request;

// Sesion
use Auth;

class ComparativaInterlaboratorioController extends Controller
{
  public function section(Request $req)
  {
    $dia_actual = Date("Y-m-d");
    $laboratorios = LaboratorioController::listByUsuario();
    $sedes = SedeController::listSedeByUser(Auth::user()->id_usuario);
    $fecha_inicial = ($req->fecha_inicial ?? (FechaDinamica::RestarDias($dia_actual, "30")));
    $fecha_final = ($req->fecha_final ?? ($dia_actual));
    $analitos = AnalitoController::listAnalitosUsed();
    $analizadores = AnalizadorController::listAnalizadoresUsed();
    $lotes_laboratorio = ControlLaboratorioController::listAllByUsuario();
    $ciudades = CiudadController::listCiudadUsed();

    return view("comparativo-interlaboratorio/comparativa-interlaboratorio")
      ->with("nomSection", "SeeSectionComparativaInterlaboratorio")
      ->with("laboratorios", $laboratorios)
      ->with("sedes", $sedes)
      ->with("analitos", $analitos)
      ->with("lotes_laboratorio", $lotes_laboratorio)
      ->with("ciudades", $ciudades)
      ->with("analizadores", $analizadores)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final);
  }
}
