<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\TemperaturaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\ConstanteController;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\LaboratorioController;

// Modelos
use Illuminate\Support\Facades\DB;
use App\AnalitoLaboratorio;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\AnalitoLaboratorioRequest;

// Sesion
use Auth;

// Helpers
use App\Helpers\FechaDinamica;

// Historicos
use App\Http\Historico\AnalitoLaboratorioHistorico;

use App\Libraries\fpdf\PDFEstadisticoCualitativo;



class AnalitoLaboratorioCualitativoController extends Controller
{

  protected $tableAnalitoLab;
  protected $historico;
  private $carpetaTemp;
  private $idReporte;


  public function __construct()
  {
    $this->carpetaTemp = public_path().'/reports_temp/';
    $this->idReporte = uniqid();
    $this->tableAnalitoLab = new AnalitoLaboratorio();

  }


  public static function listByControlLaboratorio($id_control_lab)
  {
    $tableAnalitoLab = new AnalitoLaboratorio();
    return $tableAnalitoLab
      ->select(
        "*",
        DB::raw("ifnull(analito_lab.generacion_reactivo, 'N/A') as generacion_reactivo"),
        DB::raw("ifnull(temperatura.nom_temperatura, 'Sin temperatura') as nom_temperatura")
      )
      ->join("analito", "analito.id_analito", "=", "analito_lab.analito_id_analito")
      ->join("analizador", "analizador.id_analizador", "=", "analito_lab.analizador_id_analizador")
      ->join("reactivo", "reactivo.id_reactivo", "=", "analito_lab.reactivo_id_reactivo")
      ->join("metodo", "metodo.id_metodo", "=", "analito_lab.metodo_id_metodo")
      ->join("unidad", "unidad.id_unidad", "=", "analito_lab.unidad_id_unidad")
      ->leftJoin("temperatura", "temperatura.id_temperatura", "=", "analito_lab.temperatura_id_temperatura")
      ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->orderBy("analito.nom_analito")
      ->orderBy("analizador.nom_analizador")
      ->orderBy("metodo.nom_metodo")
      ->where([
        ["analito_lab.control_laboratorio_id_control_laboratorio", $id_control_lab],
        ["analito_lab.estado", 1]
      ])
      ->get();
  }

  public static function listByControlLaboratorioAndAnalizadorAndAnalito($id_control_lab, $id_analizador, $id_analito)
  {
    $tableAnalitoLab = new AnalitoLaboratorio();
    $analitos_lab = $tableAnalitoLab
      ->select(
        "*",
        DB::raw("ifnull(analito_lab.generacion_reactivo, 'N/A') as generacion_reactivo"),
        DB::raw("ifnull(temperatura.nom_temperatura, 'Sin temperatura') as nom_temperatura")
      )
      ->join("analito", "analito.id_analito", "=", "analito_lab.analito_id_analito")
      ->join("analizador", "analizador.id_analizador", "=", "analito_lab.analizador_id_analizador")
      ->join("reactivo", "reactivo.id_reactivo", "=", "analito_lab.reactivo_id_reactivo")
      ->join("metodo", "metodo.id_metodo", "=", "analito_lab.metodo_id_metodo")
      ->join("unidad", "unidad.id_unidad", "=", "analito_lab.unidad_id_unidad")
      ->leftJoin("temperatura", "temperatura.id_temperatura", "=", "analito_lab.temperatura_id_temperatura")
      ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->orderBy("analito.nom_analito")
      ->orderBy("analizador.nom_analizador")
      ->orderBy("metodo.nom_metodo")
      ->where([
        ["analito_lab.estado", 1]
      ])
      ->whereIn("control_laboratorio.id_control_laboratorio", $id_control_lab);
    if (!empty($id_analizador) && !in_array("all", $id_analizador)) {
      $analitos_lab = $analitos_lab->whereIn("analizador.id_analizador", $id_analizador);
    }
    if (!empty($id_analito) && !in_array("all", $id_analito)) {
      $analitos_lab = $analitos_lab->whereIn("analito.id_analito", $id_analito);
    }

    return $analitos_lab->get();
  }


  public static function listByControlLaboratorioLite($id_control_lab)
  {
    $tableAnalitoLab = new AnalitoLaboratorio();
    return $tableAnalitoLab
      ->select(
        "*"
      )
      ->join("analito", "analito.id_analito", "=", "analito_lab.analito_id_analito")
      ->join("analizador", "analizador.id_analizador", "=", "analito_lab.analizador_id_analizador")
      ->join("reactivo", "reactivo.id_reactivo", "=", "analito_lab.reactivo_id_reactivo")
      ->join("metodo", "metodo.id_metodo", "=", "analito_lab.metodo_id_metodo")
      ->join("unidad", "unidad.id_unidad", "=", "analito_lab.unidad_id_unidad")
      ->leftJoin("temperatura", "temperatura.id_temperatura", "=", "analito_lab.temperatura_id_temperatura")
      ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->orderBy("analito.nom_analito")
      ->orderBy("analizador.nom_analizador")
      ->orderBy("metodo.nom_metodo")
      ->where([
        ["analito_lab.control_laboratorio_id_control_laboratorio", $id_control_lab],
        ["analito_lab.estado", 1]
      ])
      ->get();
  }


  public static function listAllByControlLaboratorio($id_control_lab)
  {
    $tableAnalitoLab = new AnalitoLaboratorio();
    return $tableAnalitoLab
      ->select(
        "*",
        DB::raw("ifnull(analito_lab.generacion_reactivo, 'N/A') as generacion_reactivo"),
        DB::raw("ifnull(temperatura.nom_temperatura, 'Sin temperatura') as nom_temperatura"),
        "analito_lab.estado as estado_analito_laboratorio"
      )
      ->join("analito", "analito.id_analito", "=", "analito_lab.analito_id_analito")
      ->join("analizador", "analizador.id_analizador", "=", "analito_lab.analizador_id_analizador")
      ->join("reactivo", "reactivo.id_reactivo", "=", "analito_lab.reactivo_id_reactivo")
      ->join("metodo", "metodo.id_metodo", "=", "analito_lab.metodo_id_metodo")
      ->join("unidad", "unidad.id_unidad", "=", "analito_lab.unidad_id_unidad")
      ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->join("laboratorio", "laboratorio.id_laboratorio", "=", "control_laboratorio.laboratorio_id_laboratorio")
      ->leftJoin("temperatura", "temperatura.id_temperatura", "=", "analito_lab.temperatura_id_temperatura")
      ->orderBy("analito_lab.estado", "desc")
      ->orderBy("analito.nom_analito")
      ->orderBy("analizador.nom_analizador")
      ->orderBy("metodo.nom_metodo")
      ->where("analito_lab.control_laboratorio_id_control_laboratorio", $id_control_lab)
      ->get();
  }


  public function section(Request $req)
  {

    $control_laboratorio = ControlLaboratorioController::listItem($req->id_reference);
    $analitos_laboratorio = self::ListAllByControlLaboratorio($req->id_reference);

    return view("analitoLaboratorio.analitoLaboratorioSection")
      ->with("analitos_laboratorio", $analitos_laboratorio)
      ->with("control_laboratorio", $control_laboratorio);
  }


  public function status(Request $req)
  {

    AnalitoLaboratorioHistorico::store("status", $req);

    $statusNow = $this->tableAnalitoLab
      ->where("id_analito_lab", $req->id)
      ->first()
      ->estado;

    $registroUpdate = $this->tableAnalitoLab
      ->where("id_analito_lab", $req->id);

    if ($statusNow == 1) {
      $registroUpdate->update(["estado" => 0]);
    } else {
      $registroUpdate->update(["estado" => 1]);
    }
  }


  public function index(Request $req)
  {
    $analitos_laboratorio = self::ListAllByControlLaboratorio($req->id_reference);

    return view("analitoLaboratorio.analitoLaboratorioIndex")
      ->with("analitos_laboratorio", $analitos_laboratorio);
  }


  public function destroy(Request $req)
  {

    AnalitoLaboratorioHistorico::store("destroy", $req);

    $this->tableAnalitoLab
      ->where("id_analito_lab", $req->id)
      ->delete();
  }


  public function store(AnalitoLaboratorioRequest $req)
  {

    AnalitoLaboratorioHistorico::store("store", $req);

    $this->tableAnalitoLab->control_laboratorio_id_control_laboratorio = $req->control_laboratorio;
    $this->tableAnalitoLab->analito_id_analito = $req->analito;
    $this->tableAnalitoLab->analizador_id_analizador = $req->analizador;
    $this->tableAnalitoLab->metodo_id_metodo = $req->metodologia;
    $this->tableAnalitoLab->reactivo_id_reactivo = $req->reactivo;
    $this->tableAnalitoLab->generacion_reactivo = $req->gen_vitros;
    $this->tableAnalitoLab->unidad_id_unidad = $req->unidades;
    $this->tableAnalitoLab->temperatura_id_temperatura = $req->temperatura;
    $this->tableAnalitoLab->save();
  }


  public static function listItem($id_analito_laboratorio)
  {
    $tableAnalitoLab = new AnalitoLaboratorio();
    return $tableAnalitoLab
      ->select(
        "*",
        DB::raw("ifnull(analito_lab.generacion_reactivo, 'N/A') as generacion_reactivo"),
        DB::raw("ifnull(temperatura.nom_temperatura, 'Sin temperatura') as nom_temperatura"),
        "analito_lab.estado as estado_analito_laboratorio"
      )
      ->join("analito", "analito.id_analito", "=", "analito_lab.analito_id_analito")
      ->join("analizador", "analizador.id_analizador", "=", "analito_lab.analizador_id_analizador")
      ->join("reactivo", "reactivo.id_reactivo", "=", "analito_lab.reactivo_id_reactivo")
      ->join("metodo", "metodo.id_metodo", "=", "analito_lab.metodo_id_metodo")
      ->join("unidad", "unidad.id_unidad", "=", "analito_lab.unidad_id_unidad")
      ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->join("matriz", "matriz.id_matriz", "=", "control.matriz_id_matriz")
      ->join("laboratorio", "laboratorio.id_laboratorio", "=", "control_laboratorio.laboratorio_id_laboratorio")
      ->leftJoin("temperatura", "temperatura.id_temperatura", "=", "analito_lab.temperatura_id_temperatura")
      ->where("analito_lab.id_analito_lab", $id_analito_laboratorio)
      ->first();
  }

  public static function listByControlLaboratorioCualitativo($id_control_lab)
  {
    $tableAnalitoLab = new AnalitoLaboratorio();
    return $tableAnalitoLab
      ->select(
        "*",
        DB::raw("ifnull(analito_lab.generacion_reactivo, 'N/A') as generacion_reactivo"),
        DB::raw("ifnull(temperatura.nom_temperatura, 'Sin temperatura') as nom_temperatura")
      )        
      ->join("analito", "analito.id_analito", "=", "analito_lab.analito_id_analito")
      ->join("analizador", "analizador.id_analizador", "=", "analito_lab.analizador_id_analizador")
      ->join("reactivo", "reactivo.id_reactivo", "=", "analito_lab.reactivo_id_reactivo")
      ->join("metodo", "metodo.id_metodo", "=", "analito_lab.metodo_id_metodo")
      ->join("unidad", "unidad.id_unidad", "=", "analito_lab.unidad_id_unidad")
      ->leftJoin("temperatura", "temperatura.id_temperatura", "=", "analito_lab.temperatura_id_temperatura")
      ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
      ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
      ->join("control", "control.id_control", "=", "lote.control_id_control")
      ->orderBy("analito.nom_analito")
      ->orderBy("analizador.nom_analizador")
      ->orderBy("metodo.nom_metodo")
      ->where([
        ["analito_lab.control_laboratorio_id_control_laboratorio", $id_control_lab],
        ["analito_lab.estado", 1],
        ["analito_lab.tipo_prueba", "cualitativo"]
      ])
      ->get();
  }


  public function edit(Request $req)
  {

    $analito_laboratorio = self::listItem($req->id);
    $metodologias = MetodologiaController::listByAnalitoEspecifico($analito_laboratorio->id_analito);
    $unidades = UnidadController::listByAnalitoEspecifico($analito_laboratorio->id_analito);
    $temperaturas = TemperaturaController::listByAnalitoEspecifico($analito_laboratorio->id_analito);

    return view("analitoLaboratorio.analitoLaboratorioEdit")
      ->with("analito_laboratorio", $analito_laboratorio)
      ->with("metodologias", $metodologias)
      ->with("unidades", $unidades)
      ->with("temperaturas", $temperaturas)
      ->with("campo", $req->campo);
  }


  public function show(Request $req)
  {

    $analito_laboratorio = self::ListItem($req->id);
    return view("analitoLaboratorio.analitoLaboratorioShow")
      ->with("analito_laboratorio", $analito_laboratorio)
      ->with("campo", $req->campo);
  }


  public function getInformacion(Request $req)
  {

    $analito_laboratorio = self::listItem($req->id);
    $estructura_analito = array(
      "laboratorio" => $analito_laboratorio->num_laboratorio . " - " . $analito_laboratorio->nom_laboratorio,
      "matriz" => $analito_laboratorio->nom_matriz,
      "control" => $analito_laboratorio->nom_control,
      "lote" => $analito_laboratorio->cod_lote,
      "fecha_caducidad" => $analito_laboratorio->fecha_vencimiento,
      "analito" => $analito_laboratorio->nom_analito,
      "analizador" => $analito_laboratorio->nom_analizador,
      "unidades" => $analito_laboratorio->nom_unidad,
      "metodologia" => $analito_laboratorio->nom_metodo,
      "reactivo" => $analito_laboratorio->nom_reactivo,
      "temperatura" => $analito_laboratorio->nom_temperatura,
    );
    return response($estructura_analito, 200);
  }


  public function getResultados(Request $req)
  {

    $num_niveles = AnalitoLaboratorioController::listItem($req->id)->num_niveles;
    $tipo_prueba_cualitativo = AnalitoLaboratorioController::listItem($req->id)->tipo_prueba_cualitativo;
    $series = ResultadoCualitativoController::ListJSONByAnalito($req->id);
    $lote_caducado = FechaDinamica::BlockByCaducidad($req->id);

    return view("resultadosLaboratorioCualitativo.resultadosLaboratorioCualitativoIndex")
      ->with("num_niveles", $num_niveles)
      ->with("series", $series)
      ->with("tipo_prueba_cualitativo", $tipo_prueba_cualitativo)
      ->with("lote_caducado", $lote_caducado)
      ->with("rol_usuario", Auth::user()->rol_id_rol);
  }


  public function getTitleResultados(Request $req)
  {
    $num_niveles = AnalitoLaboratorioController::listItem($req->id)->num_niveles;
    $tipo_prueba_cualitativo = AnalitoLaboratorioController::listItem($req->id)->tipo_prueba_cualitativo;
    $defecto_cualitativo = explode("*", AnalitoLaboratorioController::listItem($req->id)->defecto_cualitativo);
    $lote_caducado = FechaDinamica::BlockByCaducidad($req->id);
    return view("resultadosLaboratorioCualitativo.titleResultadosLaboratorioCualitativoIndex")
      ->with("num_niveles", $num_niveles)
      ->with("tipo_prueba_cualitativo", $tipo_prueba_cualitativo)
      ->with("lote_caducado", $lote_caducado)
      ->with("defecto_cualitativo", $defecto_cualitativo)
      ->with("rol_usuario", Auth::user()->rol_id_rol);
  }


  public function getValoresEstadisticos(Request $req)
  {
    $analito_laboratorio = AnalitoLaboratorioController::listItem($req->id)->control_laboratorio_id_control_laboratorio;
    $control_laboratorio = ControlLaboratorioController::listItem($analito_laboratorio);
    $laboratorio = LaboratorioController::listItem($control_laboratorio->laboratorio_id_laboratorio);
    $fecha_inicial = $req->fecha_inicial;
    $fecha_final = $req->fecha_final;


    $defecto_cualitativo = explode("*", AnalitoLaboratorioController::listItem($req->id)->defecto_cualitativo);
    $valores = explode(",", AnalitoLaboratorioController::listItem($req->id)->tipo_prueba_cualitativo);
    $num_niveles = AnalitoLaboratorioController::listItem($req->id)->num_niveles;
    $series = ResultadoCualitativoController::ListJSONByAnalitoLimitDate($req->id, $req->fecha_inicial, $req->fecha_final);
    $resultado = $this->getestadisticaCualitativo($series, $defecto_cualitativo, $num_niveles);

    $type_colum = $this->getTypeColumn($defecto_cualitativo[0], $defecto_cualitativo);
    $grafica = $this->getGrafica($series, $num_niveles);
    $grafica2 = $this->getGrafica2($series, $num_niveles, $defecto_cualitativo, $valores);

    return view("resultadosLaboratorioCualitativo.valoresEstadisticosCualitativoIndex")
      ->with("num_niveles", $num_niveles)
      ->with("resultado", $resultado)
      ->with("grafica", $grafica)
      ->with("grafica2", $grafica2)
      ->with("control_laboratorio", $control_laboratorio)
      ->with("laboratorio", $laboratorio)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final)
      ->with("series", $series)
      ->with("defecto_cualitativo", $defecto_cualitativo)
      ->with("type_colum", $type_colum)
      ->with("data", $this->getValores($resultado, $defecto_cualitativo));
  }

  public function getValoresEstadisticosCualitativos(Request $req)
  {
    $analito_lab = $this->listByControlLaboratorioCualitativo($req->control_laboratorio);
    $fecha_inicial = $req->fecha_inicial;
    $fecha_final = $req->fecha_final;
    $list = [];
    for ($i=0; $i < sizeof($analito_lab); $i++) { 
      $defecto_cualitativo = explode("*", AnalitoLaboratorioController::listItem($analito_lab[$i]->id_analito_lab)->defecto_cualitativo);
      $valores = explode(",", AnalitoLaboratorioController::listItem($analito_lab[$i]->id_analito_lab)->tipo_prueba_cualitativo);
      $num_niveles = AnalitoLaboratorioController::listItem($analito_lab[$i]->id_analito_lab)->num_niveles;
      $series = ResultadoCualitativoController::ListJSONByAnalitoLimitDate($analito_lab[$i]->id_analito_lab, $fecha_inicial, $fecha_final);    
      $resultado = $this->getestadisticaCualitativo($series, $defecto_cualitativo, $num_niveles);
      $grafica2 = $this->getGrafica2($series, $num_niveles, $defecto_cualitativo, $valores);
      $list[] = [
        'grafica2' => $grafica2,
        'resultado' => $resultado,
        'num_niveles' => $num_niveles,
        'defecto_cualitativo' => $defecto_cualitativo,
        'informacion' => "Analizador: " . $analito_lab[$i]->nom_analizador . ",  Método: ". $analito_lab[$i]->nom_metodo . ", Reactivo: ". $analito_lab[$i]->nom_reactivo . ", Generación: ". $analito_lab[$i]->generacion_reactivo . ", Unidad: ". $analito_lab[$i]->nom_unidad . ", Temperatura: ". $analito_lab[$i]->nom_temperatura,
        'mensurando' => $analito_lab[$i]->nom_analito,
        'data' => $this->getValores($resultado, $defecto_cualitativo)
      ];
    }
  
    return $list;
  }

  private function getGrafica($series, $num_niveles) {
    $res = [];
    for ($i=0; $i < $num_niveles; $i++) { 
      $res[] = [];
    }
    for ($i=0; $i < sizeof($series); $i++) {
      $serie = $series[$i]; 
      $resultados = $serie["resultados"];
      for ($j=0; $j < sizeof($resultados); $j++) { 
        $data = ["x" => $serie["fecha"], "y" => $resultados[$j]["concentracion"]];
        $res[$resultados[$j]["nivel_analito"]-1][] = $data;
      }
    }

    return $res;
  }

  private function getGrafica2($series, $num_niveles, $list, $valores) {
    $res = [];
    for ($i=0; $i < $num_niveles; $i++) { 
      $res[] = [];
    }

    $vec1 = $this->getGrafica($series, $num_niveles);

    for ($i=0; $i < sizeof($vec1); $i++) {
      $vec = [];
      for ($k=0; $k < sizeof($valores); $k++) {
        $vec[] = ["key" => $valores[$k], "value" => []];
        for ($j=0; $j < sizeof($vec1[$i]); $j++) {
          if ($valores[$k] == $vec1[$i][$j]["y"]) {
            $vec[$k]["value"][] = 1;
          } else {
            $vec[$k]["value"][] = 0;
          }
        }
      }
      $res[$i] = $vec;
    }

    return $res;
  }

  private function getValores($resultado, $defecto_cualitativo) {
    if (sizeof($resultado) == 0) {
      return [];
    }
    $total=0;
    $col = array_fill(0, sizeof($defecto_cualitativo), 0);
    $fila = array_fill(0, 2, 0);
    for ($res=0; $res < sizeof($resultado); $res++) { 
      for($nivel=0; $nivel< sizeof($resultado[$res]); $nivel++) {
        $fila[$res]+=$resultado[$res][$nivel]; 
        $col[$nivel]+=$resultado[$res][$nivel];           
      }
      $total+=$fila[$res];
    }
    $t = $col[0];
    $u = $col[1];
    $r = $fila[0];
    $s = $fila[1];
    $p0 = 0;
    $pe = 0;
    if ($total != 0) {
      $p0 = ($resultado[0][0]+$resultado[1][1])/$total;
      $pe = (($r*$t)+($s*$u))/($total*$total);
    }
    $k = ($p0-$pe)/(1-$pe);
    $message = "";
    if ($k < 0) {
        $message = "Sin acuerdo";
    } elseif ($k >= 0 && $k < 0.21) {
        $message = "Insignificante";
    } elseif ($k >= 0.21 && $k < 0.41) {
        $message = "Mediano";
    } elseif ($k >= 0.41 && $k < 0.61) {
        $message = "Moderado";
    } elseif ($k >= 0.61 && $k < 0.81) {
        $message = "Sustancial";
    } elseif ($k >= 0.81 && $k <= 1) {
        $message = "Casi perfecto";
    }
    return ["fila" => $fila, "col" => $col, "total" => $total, "t" => $t, "u" => $u, "r" => $r, "s" => $s,
      "p0" => $p0, "pe" => $pe, "k" => $k, "message" => $message];
  }


  public static function getValoresSigmometria($id_analito_lab, $fecha_inicial, $fecha_final, $nivel)
  {
    $limite_aps = APSController::GetDefaultByAnalito($id_analito_lab);
    $valores_estadisticos_nivel = ResultadoCualitativoController::GetJSONValoresEstadisticosNivel($id_analito_lab, $fecha_inicial, $fecha_final, $limite_aps, $nivel);
    $array_final = array(
      "media" => $valores_estadisticos_nivel["media"],
      "de" => $valores_estadisticos_nivel["de"],
      "cv" => $valores_estadisticos_nivel["cv"],
      "diana" => $valores_estadisticos_nivel["diana"],
      "sesgo" => $valores_estadisticos_nivel["sesgo"],
      "sigma" => $valores_estadisticos_nivel["sigma"],
      "puntos_t" => $valores_estadisticos_nivel["puntos_t"],
      "puntos_a" => $valores_estadisticos_nivel["puntos_a"],
      "puntos_r" => $valores_estadisticos_nivel["puntos_r"],
      "nom_fuente_etmp" => (isset($limite_aps) ? $limite_aps->nom_fuente_etmp : null),
      "valor_limite" => (isset($limite_aps) ? $limite_aps->valor_limite : null),
      "sesgo_mp" => (isset($limite_aps) ? $limite_aps->sesgo_mp : null),
      "cv_mp" => (isset($limite_aps) ? $limite_aps->cv_mp : null),
    );

    return $array_final;
  }

  public function getValoresGeneralesAnalito(Request $req)
  {
    $constante_z = ConstanteController::getByAnalitoLaboratorio($req->id);
    $limite_aps = APSController::GetDefaultByAnalito($req->id);
    $valores_estadisticos = ResultadoCualitativoController::GetJSONValoresEstadisticos($req->id, $req->fecha_inicial, $req->fecha_final, $limite_aps);
    $informacion_general = self::listItem($req->id);
    $resultados_aprobados = ResultadoCualitativoController::GetJSONResultadosAprobados($req->id, $req->fecha_inicial, $req->fecha_final);
    $array_final = array(
      "constante_z" => $constante_z,
      "informacion_general" => $informacion_general,
      "limite_aps" => $limite_aps,
      "resultados_aprobados" => $resultados_aprobados,
      "valores_estadisticos" => $valores_estadisticos
    );
    return response($array_final, 200);
  }


  public static function getValoresGeneralesAnalitoLite($id, $fecha_inicial, $fecha_final)
  {
    $constante_z = ConstanteController::getByAnalitoLaboratorio($id);
    $limite_aps = APSController::GetDefaultByAnalito($id);
    $valores_estadisticos = ResultadoCualitativoController::GetJSONValoresEstadisticos($id, $fecha_inicial, $fecha_final, $limite_aps);
    $informacion_general = self::listItem($id);
    $resultados_aprobados = ResultadoCualitativoController::GetJSONResultadosAprobados($id, $fecha_inicial, $fecha_final);
    $array_final = array(
      "constante_z" => $constante_z,
      "informacion_general" => $informacion_general,
      "limite_aps" => $limite_aps,
      "resultados_aprobados" => $resultados_aprobados,
      "valores_estadisticos" => $valores_estadisticos
    );
    return $array_final;
  }

  public static function updateDefectoCualitativo($req)
  {
    $analitoLab = new AnalitoLaboratorio();

    AnalitoLaboratorioHistorico::store("update", $req);

    $analito_laboratorio = $analitoLab
      ->where("id_analito_lab", $req->id)
      ->first();

    switch ($req->campo) {
      case "defecto_cualitativo":
        $analito_laboratorio->update(["defecto_cualitativo" => $req->defecto_cualitativo]);
        break;
    }
  }


  public function update(AnalitoLaboratorioRequest $req)
  {

    AnalitoLaboratorioHistorico::store("update", $req);

    $analito_laboratorio = $this->tableAnalitoLab
      ->where("id_analito_lab", $req->id)
      ->first();

    switch ($req->campo) {
      case "analito":
        $analito_laboratorio->update(["analito_id_analito" => $req->analito]);
        break;

      case "analizador":
        $analito_laboratorio->update(["analizador_id_analizador" => $req->analizador]);
        break;

      case "metodologia":
        $analito_laboratorio->update(["metodo_id_metodo" => $req->metodologia]);
        break;

      case "reactivo":
        $analito_laboratorio->update(["reactivo_id_reactivo" => $req->reactivo]);
        break;

      case "gen_vitros":
        $analito_laboratorio->update(["generacion_reactivo" => $req->gen_vitros]);
        break;

      case "unidades":
        $analito_laboratorio->update(["unidad_id_unidad" => $req->unidades]);
        break;

      case "temperatura":
        $analito_laboratorio->update(["temperatura_id_temperatura" => $req->temperatura]);
        break;
      case "control_lab":
        $analito_laboratorio->update(["control_laboratorio_id_control_laboratorio" => $req->control_lab]);
        break;
      case "defecto_cualitativo":
        $analito_laboratorio->update(["defecto_cualitativo" => $req->defecto_cualitativo]);
        break;
    }
  }

  public function getTopAnalitoLab(Request $req)
    {

        $search = $req->busqueda;

        $resultQuery = DB::table('laboratorio')
            ->distinct()
            ->select(
                "laboratorio.id_laboratorio",
                "laboratorio.nom_laboratorio",
                "laboratorio.num_laboratorio",
                "control_laboratorio.id_control_laboratorio",
                "lote.cod_lote",
                "control.nom_control"
            )
            ->join("laboratorio_usuario", "id_laboratorio", "=", "laboratorio_id_laboratorio")
            ->join("control_laboratorio", "control_laboratorio.laboratorio_id_laboratorio", "=", "laboratorio.id_laboratorio")
            ->leftjoin("analito_lab", "analito_lab.control_laboratorio_id_control_laboratorio", "=", "control_laboratorio.id_control_laboratorio")
            ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
            ->join("control", "control.id_control", "=", "lote.control_id_control")
            ->where([
                ["laboratorio_usuario.usuario_id_usuario", Auth::user()->id_usuario],
                ["laboratorio.estado", 1],
                ["control_laboratorio.estado", 1],
                ["lote.estado", 1]
            ])
            ->whereRaw("(laboratorio.nom_laboratorio like '%$search%' OR laboratorio.num_laboratorio like '%$search%' OR lote.cod_lote like '%$search%' OR control.nom_control like '%$search%')")
            ->orderBy("laboratorio.principal", "desc")
            ->limit(40)
            ->get();

        return $this->returnJSONGetTopAnalitoLab($resultQuery);
    }

    private function returnJSONGetTopAnalitoLab($resultQuery)
    {
        $arrayAnalitoLab = [];
        foreach ($resultQuery as $rowQuery) {
            array_push(
                $arrayAnalitoLab,
                [
                    "id" => $rowQuery->id_control_laboratorio,
                    "text" => $rowQuery->num_laboratorio . " - " . $rowQuery->nom_laboratorio. " - " . $rowQuery->cod_lote. " - " . $rowQuery->nom_control,
                ]
            );
        }

        return response($arrayAnalitoLab, 200);
    }

    private function getestadisticaCualitativo($serie, $defecto_cualitativo, $niveles) {
      //$mat = [];

      if($niveles != 2){
        return [];
      }
      $res = $this->createMatriz($niveles);
      for ($i=0; $i < sizeof($serie); $i++) { 
        $resultados = $serie[$i]["resultados"];
        // if (sizeof($resultados) != 2) {
        //   return [];
        // }
        for ($j=0; $j < sizeof($resultados); $j++) { 
          //$mat[$resultados[$j]["nivel_analito"]-1][] = $resultados[$j]["concentracion"];
          if($resultados[$j]["concentracion"] == $defecto_cualitativo[$resultados[$j]["nivel_analito"]-1]) {
            $res[$j][$resultados[$j]["nivel_analito"]-1] += 1;
            /*if ($this->getType($resultados[$j]["concentracion"]) == 0) {
              $res[1][$resultados[$j]["nivel_analito"]-1] += 1;
            } else {
              $res[0][$resultados[$j]["nivel_analito"]-1] += 1;
            }*/
          } else {
            if ($j == 0) {
              $res[1][$resultados[$j]["nivel_analito"]-1] += 1;
            } else {
              $res[0][$resultados[$j]["nivel_analito"]-1] += 1;
            }
            /*if ($this->getType($resultados[$j]["concentracion"]) == 0) {
              $res[1][$resultados[$j]["nivel_analito"]-1] += 1;
            } else {
              $res[0][$resultados[$j]["nivel_analito"]-1] += 1;
            }*/
          }
        }
      }

      /* dd(["reorder" => $mat, "res" => $res ]);
      print_r("-------");
      print_r($defecto_cualitativo); */
      return $res;
    }

    private function createMatriz($num) {
      $mat = [];
      for ($i=0; $i < 2; $i++) { 
        for ($j=0; $j < $num; $j++) { 
          $mat[$i][$j] = 0;
        }
      }
      return $mat;
    }

    private function getType($value) {
      if ($value == 'NO REACTIVO' || $value == "NEGATIVO" || $value == "AUSENTE") {
        return 0;
      }
      return 1;
    }

    private function getTypeColumn($value, $data) {
      $init = ["NO REACTIVO","REACTIVO","NEGATIVO","POSITIVO","PRESENTE","AUSENTE"];
      if ($value == "NO REACTIVO" || $value == "REACTIVO") {
        return ["REACTIVO", "NO REACTIVO"];
      } elseif ($value == "NEGATIVO" || $value == "POSITIVO") {
        return ["POSITIVO", "NEGATIVO"];
      } elseif ($value == "AUSENTE" || $value == "PRESENTE") {
        return ["PRESENTE", "AUSENTE"];
      } else {
        if (count($data) == 0) {
          return ["",""];
        } else {
          return $data;
        }
      } 

    }

    public function generarPdfCualitativo(Request $request){
      // Obtener datos necesarios para el PDF

      $defecto_cualitativo = json_decode($request->input('defecto_cualitativo'), true);

      $resultado = json_decode($request->input('resultado'), true);
      $data = json_decode($request->input('data'), true);
      $grafica2 = json_decode($request->input('grafica2'), true);
      $control_laboratorio = json_decode($request->input('control_laboratorio'), false);
      $laboratorio = json_decode($request->input('laboratorio'), false);
      $fecha_inicial = json_decode($request->input('fecha_inicial'), false);
      $fecha_final = json_decode($request->input('fecha_final'), false);

      // Crear instancia de GraficaPdf
      $pdf = new PDFEstadisticoCualitativo('P','mm','letter');
      
      // Generar contenido del PDF
      $pdf->SetFont("Arial", "", 4.5);
      $pdf->generarContenido($defecto_cualitativo, $resultado, $data, $grafica2, $control_laboratorio, $laboratorio, $fecha_inicial, $fecha_final);
      $pdf->Close();


      // Descargar el PDF
      $pdf->Output('I', $laboratorio->nom_laboratorio."-".$fecha_inicial."-".$fecha_final.".pdf");

    }

}

