<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\TemperaturaController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\ConstanteController;


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

class AnalitoLaboratorioController extends Controller
{

  protected $tableAnalitoLab;
  protected $historico;

  public function __construct()
  {
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
      "id_analito_laboratorio" => $req->id,
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
    $series = ResultadoController::ListJSONByAnalito($req->id);
    $lote_caducado = FechaDinamica::BlockByCaducidad($req->id);

    return view("resultadosLaboratorio.resultadosLaboratorioIndex")
      ->with("num_niveles", $num_niveles)
      ->with("series", $series)
      ->with("lote_caducado", $lote_caducado)
      ->with("rol_usuario", Auth::user()->rol_id_rol);
  }


  public function getTitleResultados(Request $req)
  {
    $num_niveles = AnalitoLaboratorioController::listItem($req->id)->num_niveles;
    $lote_caducado = FechaDinamica::BlockByCaducidad($req->id);
    return view("resultadosLaboratorio.titleResultadosLaboratorioIndex")
      ->with("num_niveles", $num_niveles)
      ->with("lote_caducado", $lote_caducado)
      ->with("rol_usuario", Auth::user()->rol_id_rol);
  }


  public function getValoresEstadisticos(Request $req)
  {
    $constante_z = ConstanteController::getByAnalitoLaboratorio($req->id);
    $limite_aps = APSController::GetDefaultByAnalito($req->id);
    $valores_estadisticos = ResultadoController::GetJSONValoresEstadisticos($req->id, $req->fecha_inicial, $req->fecha_final, $limite_aps);
    $valor_limite = (isset($limite_aps->valor_limite)) ? ($limite_aps->valor_limite . "%") : "Indeterminado";
    $nom_fuente_etmp = (isset($limite_aps->nom_fuente_etmp)) ? ($limite_aps->nom_fuente_etmp) : "Indeterminada";
    return view("resultadosLaboratorio.valoresEstadisticosIndex")
      ->with("id_reference", $req->id)
      ->with("valor_limite", $valor_limite)
      ->with("constante_z", $constante_z)
      ->with("valores_estadisticos", $valores_estadisticos)
      ->with("eventos", $req->eventos)
      ->with("nom_fuente_etmp", $nom_fuente_etmp);
  }


  public static function getValoresSigmometria($id_analito_lab, $fecha_inicial, $fecha_final, $nivel)
  {
    $limite_aps = APSController::GetDefaultByAnalito($id_analito_lab);
    $valores_estadisticos_nivel = ResultadoController::GetJSONValoresEstadisticosNivel($id_analito_lab, $fecha_inicial, $fecha_final, $limite_aps, $nivel);
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
    $valores_estadisticos = ResultadoController::GetJSONValoresEstadisticos($req->id, $req->fecha_inicial, $req->fecha_final, $limite_aps);
    $informacion_general = self::listItem($req->id);
    $resultados_aprobados = ResultadoController::GetJSONResultadosAprobados($req->id, $req->fecha_inicial, $req->fecha_final);
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
    $valores_estadisticos = ResultadoController::GetJSONValoresEstadisticos($id, $fecha_inicial, $fecha_final, $limite_aps);
    $informacion_general = self::listItem($id);
    $resultados_aprobados = ResultadoController::GetJSONResultadosAprobados($id, $fecha_inicial, $fecha_final);
    $array_final = array(
      "constante_z" => $constante_z,
      "informacion_general" => $informacion_general,
      "limite_aps" => $limite_aps,
      "resultados_aprobados" => $resultados_aprobados,
      "valores_estadisticos" => $valores_estadisticos
    );
    return $array_final;
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
      case "tipo_prueba":
        $analito_laboratorio->update(["tipo_prueba" => $req->tipo_prueba]);
        break;
      case "tipo_prueba_cualitativo":
        $analito_laboratorio->update(["tipo_prueba_cualitativo" => trim(str_replace(", ", ",", $req->tipo_prueba_cualitativo))]);
        break;
      case "control_lab":
        $analito_laboratorio->update(["control_laboratorio_id_control_laboratorio" => $req->control_lab]);
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

}
