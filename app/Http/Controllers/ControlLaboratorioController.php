<?php

namespace App\Http\Controllers;

// Controladores
use Auth;
use App\ControlLaboratorio;

// Modelos
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\AnalitoLaboratorioCualitativoController;
use App\Http\Requests\ControlLaboratorioRequest;
use App\Http\Requests\CopiarLoteRequest;

// Historicos
use App\Http\Historico\ControlLaboratorioHistorico;

// Helpers
use App\Helpers\FechaDinamica;

class ControlLaboratorioController extends Controller
{

  protected $tableLabo;
  protected $historico;

  public function __construct()
  {
    $this->tableControlLabo = new ControlLaboratorio();
  }


  public static function listByLaboratorio($id_laboratorio)
  {
    $tableControlLabo = new ControlLaboratorio();

    return $tableControlLabo
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->join("matriz", "matriz.id_matriz", "control.matriz_id_matriz")
      ->where([
        ["control_laboratorio.laboratorio_id_laboratorio", $id_laboratorio],
        ["control_laboratorio.estado", 1]
      ])
      ->orderBy("lote.cod_lote", "asc")
      ->orderBy("control.nom_control", "asc")
      ->get();
  }


  public static function listAllByUsuario()
  {
    $tableControlLabo = new ControlLaboratorio();

    return $tableControlLabo
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("laboratorio", "laboratorio.id_laboratorio", "control_laboratorio.laboratorio_id_laboratorio")
      ->join("laboratorio_usuario", "laboratorio.id_laboratorio", "laboratorio_usuario.laboratorio_id_laboratorio")
      ->where([
        ["laboratorio_usuario.usuario_id_usuario", Auth::user()->id_usuario],
        ["control_laboratorio.estado", 1],
        ["laboratorio.estado", 1]
      ])
      ->orderBy("lote.cod_lote", "asc")
      ->orderBy("laboratorio.num_laboratorio", "asc")
      ->get();
  }


  public static function listAllByLaboratorio($id_laboratorio)
  {
    $tableControlLabo = new ControlLaboratorio();

    return $tableControlLabo
      ->select(
        "control_laboratorio.estado as estado_control_laboratorio",
        "control_laboratorio.id_control_laboratorio",
        "lote.id_lote",
        "lote.cod_lote",
        "lote.fecha_vencimiento",
        "control.nom_control",
        "control.num_niveles",
        "matriz.nom_matriz",
        "laboratorio.id_laboratorio",
        "laboratorio.nom_laboratorio",
      )
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->join("matriz", "matriz.id_matriz", "control.matriz_id_matriz")
      ->join("laboratorio", "laboratorio.id_laboratorio", "control_laboratorio.laboratorio_id_laboratorio")
      ->where([
        ["control_laboratorio.laboratorio_id_laboratorio", $id_laboratorio],
      ])
      ->orderBy("control_laboratorio.estado", "desc")
      ->orderBy("lote.cod_lote", "asc")
      ->orderBy("control.nom_control", "asc")
      ->get();
  }

  public static function listAllByLaboratorioAndSede($id_laboratorio, $id_sede, $id_ciudad)
  {
    $tableControlLabo = new ControlLaboratorio();
    $controles = $tableControlLabo
      ->select(
        "control_laboratorio.*"
      )
      ->join("laboratorio", "laboratorio.id_laboratorio", "=", "control_laboratorio.laboratorio_id_laboratorio")
      ->join("sede", "sede.id_sede", "=", "laboratorio.sede_id_sede")
      ->where([
        ["sede.estado", 1],
        ["laboratorio.estado", 1],
        ["control_laboratorio.estado", 1]
      ]);
    if (!empty($id_laboratorio) && !in_array("all", $id_laboratorio)) {
      $controles = $controles->whereIn("control_laboratorio.laboratorio_id_laboratorio", $id_laboratorio);
    }
    if (!empty($id_sede) && !in_array("all", $id_sede)) {
      $controles = $controles->whereIn("laboratorio.sede_id_sede", $id_sede);
    }
    if (!empty($id_ciudad) && !in_array("all", $id_ciudad)) {
      $controles = $controles->whereIn("sede.ciudad_id_ciudad", $id_ciudad);
    }
    return $controles
      ->get();
  }

  public function section(Request $req)
  {

    $laboratorio = LaboratorioController::listItem($req->id_reference);
    $lotes_laboratorio = self::ListAllByLaboratorio($req->id_reference);

    return view("controlLaboratorio.controlLaboratorioSection")
      ->with("laboratorio", $laboratorio)
      ->with("lotes_laboratorio", $lotes_laboratorio);
  }


  public function graficacionLote(Request $req)
  {
    $control_laboratorio = $req->control_laboratorio;
    $analitos_lab = AnalitoLaboratorioController::listByControlLaboratorioLite($req->control_laboratorio);
    $fecha_inicial = $req->fecha_inicial;
    $fecha_final = $req->fecha_final;

    return view("controlLaboratorio.graficacionLote")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("analitos_lab", $analitos_lab)
      ->with("id_control_laboratorio", $req->control_laboratorio)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final);
  }

  public function graficacionLoteCualitativo(Request $req)
  {
    $analito_laboratorio_controller = new AnalitoLaboratorioCualitativoController();
    $data_analito_cualitativo = $analito_laboratorio_controller->getValoresEstadisticosCualitativos($req);
    $control_laboratorio = $req->control_laboratorio;
    $analitos_lab = AnalitoLaboratorioController::listByControlLaboratorioLite($req->control_laboratorio);
    $fecha_inicial = $req->fecha_inicial;
    $fecha_final = $req->fecha_final;

    return view("controlLaboratorio.graficacionLoteCualitativo")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("analitos_lab", $analitos_lab)
      ->with("id_control_laboratorio", $req->control_laboratorio)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final)
      ->with("all_information", $data_analito_cualitativo);
  }


  public function graficacionLoteSigmometria(Request $req)
  {
    $control_laboratorio = $req->control_laboratorio;
    $fecha_inicial = $req->fecha_inicial;
    $fecha_final = $req->fecha_final;

    return view("controlLaboratorio.graficacionLoteSigmometria")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("id_control_laboratorio", $req->control_laboratorio)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final);
  }

  public function sectionCopiarLote(Request $req)
  {

    $control_laboratorio = self::listItem($req->id_reference);
    $lote = LoteController::listItem($control_laboratorio->id_lote);
    $lotes_mismo_control = LoteController::listByControl($lote->id_control);

    return view("controlLaboratorio.controlLaboratorioCopiarLote")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("lotes_mismo_control", $lotes_mismo_control);
  }

  public function sectionExportarGraficasIntegradas(Request $req)
  {

    $control_laboratorio = self::listItem($req->id_reference);
    $dia_actual = Date("Y-m-d");
    $fecha_inicial = (isset($req->fecha_inicial) ? $req->fecha_inicial : (FechaDinamica::RestarDias($dia_actual, "30")));
    $fecha_final = (isset($req->fecha_final) ? $req->fecha_final : ($dia_actual));

    return view("controlLaboratorio.controlLaboratorioExportarGraficasIntegradas")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final);
  }

  public function sectionExportarGraficasCualitativo(Request $req)
  {

    $control_laboratorio = self::listItem($req->id_reference);
    $dia_actual = Date("Y-m-d");
    $fecha_inicial = (isset($req->fecha_inicial) ? $req->fecha_inicial : (FechaDinamica::RestarDias($dia_actual, "30")));
    $fecha_final = (isset($req->fecha_final) ? $req->fecha_final : ($dia_actual));

    return view("controlLaboratorio.controlLaboratorioExportarGraficasCualitativo")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final);
  }

  public function index(Request $req)
  {
    $lotes_laboratorio = self::ListAllByLaboratorio($req->id_reference);

    return view("controlLaboratorio.controlLaboratorioIndex")
      ->with("lotes_laboratorio", $lotes_laboratorio);
  }


  public function store(ControlLaboratorioRequest $req)
  {

    ControlLaboratorioHistorico::store("store", $req);

    $this->tableControlLabo->laboratorio_id_laboratorio = $req->laboratorio;
    $this->tableControlLabo->lote_id_lote = $req->lote;
    $this->tableControlLabo->save();
  }

  public function storeCopiarLote(CopiarLoteRequest $req)
  {

    ControlLaboratorioHistorico::store("storeCopiarLote", $req);

    $control_laboratorio = self::listItem($req->lote_origen);
    $analitos_old = AnalitoLaboratorioController::listByControlLaboratorioLite($req->lote_origen);

    // Registrar el nuevo lote para el laboratorio y obtener el ID
    $id_control_lab_nuevo = DB::table('control_laboratorio')->insertGetId(
      [
        'laboratorio_id_laboratorio' => $control_laboratorio->laboratorio_id_laboratorio,
        'lote_id_lote' => $req->lote_nuevo,
        'estado' => 1
      ]
    );

    // Recorrer cada analito del lote anterior y registrarlo en el nuevo lote
    foreach ($analitos_old as $analito_old) {
      DB::table('analito_lab')->insert(
        [
          'control_laboratorio_id_control_laboratorio' => $id_control_lab_nuevo,
          'analito_id_analito' => $analito_old->analito_id_analito,
          'analizador_id_analizador' => $analito_old->analizador_id_analizador,
          'reactivo_id_reactivo' => $analito_old->reactivo_id_reactivo,
          'generacion_reactivo' => $analito_old->generacion_reactivo,
          'metodo_id_metodo' => $analito_old->metodo_id_metodo,
          'unidad_id_unidad' => $analito_old->unidad_id_unidad,
          'temperatura_id_temperatura' => $analito_old->temperatura_id_temperatura,
          'estado' => $analito_old->estado
        ]
      );
    }


    // Inactivar el lote anterior
    self::listItem($req->lote_origen)->update(["estado" => 0]);
  }


  public function status(Request $req)
  {
    ControlLaboratorioHistorico::store("status", $req);
    $statusNow = $this->tableControlLabo
      ->where("id_control_laboratorio", $req->id)
      ->first()
      ->estado;
    $registroUpdate = $this->tableControlLabo
      ->where("id_control_laboratorio", $req->id);
    if ($statusNow == 1) {
      $registroUpdate->update(["estado" => 0]);
    } else {
      $registroUpdate->update(["estado" => 1]);
    }
  }


  public function destroy(Request $req)
  {
    ControlLaboratorioHistorico::store("destroy", $req);
    $this->tableControlLabo
      ->where("id_control_laboratorio", $req->id)
      ->delete();
  }


  public static function listItem($id_control_laboratorio)
  {
    $tableControlLabo = new ControlLaboratorio();
    return $tableControlLabo
      ->select(
        "control_laboratorio.estado as estado_control_laboratorio",
        "control_laboratorio.id_control_laboratorio",
        "control_laboratorio.laboratorio_id_laboratorio",
        "control_laboratorio.lote_id_lote",
        "lote.id_lote",
        "lote.cod_lote",
        "lote.fecha_vencimiento",
        "control.nom_control",
        "control.num_niveles",
        "matriz.nom_matriz",
        "laboratorio.num_laboratorio",
        "laboratorio.id_laboratorio",
        "laboratorio.nom_laboratorio"
      )
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->join("matriz", "matriz.id_matriz", "control.matriz_id_matriz")
      ->join("laboratorio", "laboratorio.id_laboratorio", "control_laboratorio.laboratorio_id_laboratorio")
      ->where("control_laboratorio.id_control_laboratorio", $id_control_laboratorio)
      ->first();
  }


  public static function listItemPlus($id_control_laboratorio)
  {
    $tableControlLabo = new ControlLaboratorio();
    return $tableControlLabo
      ->select("*")
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->join("matriz", "matriz.id_matriz", "control.matriz_id_matriz")
      ->join("laboratorio", "laboratorio.id_laboratorio", "control_laboratorio.laboratorio_id_laboratorio")
      ->join("sede", "sede.id_sede", "laboratorio.sede_id_sede")
      ->join("institucion", "institucion.id_institucion", "sede.institucion_id_institucion")
      ->where("control_laboratorio.id_control_laboratorio", $id_control_laboratorio)
      ->first();
  }


  public function edit(Request $req)
  {
    $control_laboratorio = self::ListItem($req->id);
    return view("controlLaboratorio.controlLaboratorioEdit")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("campo", $req->campo);
  }


  public function show(Request $req)
  {

    $control_laboratorio = self::ListItem($req->id);
    return view("controlLaboratorio.controlLaboratorioShow")
      ->with("control_laboratorio", $control_laboratorio)
      ->with("campo", $req->campo);
  }


  public function update(ControlLaboratorioRequest $req)
  {
    ControlLaboratorioHistorico::store("update", $req);
    $control_laboratorio = $this->tableControlLabo
      ->where("id_control_laboratorio", $req->id)
      ->first();
    switch ($req->campo) {
      case "lote":
        $control_laboratorio->update(["lote_id_lote" => $req->lote]);
        break;
      case "laboratorio":
        $control_laboratorio->update(["laboratorio_id_laboratorio" => $req->laboratorio]);
        break;
    }
  }

}
