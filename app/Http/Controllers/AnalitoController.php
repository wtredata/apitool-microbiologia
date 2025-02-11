<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\TemperaturaController;

use Illuminate\Support\Facades\DB;

// Modelos
use App\Analito;

// Historicos
use App\Http\Historico\AnalitoHistorico;

// Request
use Illuminate\Http\Request;
use App\Http\Requests\AnalitoRequest;

class AnalitoController extends Controller
{

  protected $tableAnalito;
  protected $historico;
  protected $array_get;

  public function __construct()
  {
    $this->tableAnalito = new Analito();
    $this->array_get = array();
  }

  public static function listAnalitos()
  {
    $analito = new Analito();
    return $analito
      ->orderBy("analito.nom_analito", "asc")
      ->get();
  }

  public function GetTopByControlLaboratorio(Request $req)
  {
    $search = $req->busqueda;
    $resultQuery = DB::table('analito')
      ->select(
        "analito.id_analito as id_analito",
        "analito.nom_analito as nom_analito"
      )
      ->whereRaw("analito.nom_analito like '%$search%' and analito.estado = 1")
      ->orderBy("analito.nom_analito", "asc")
      ->limit(40)
      ->get();

    return $this->returnJSONGetTopByControlLaboratorio($resultQuery);
  }


  private function returnJSONGetTopByControlLaboratorio($resultQuery)
  {
    foreach ($resultQuery as $rowQuery) {
      array_push(
        $this->array_get,
        [
          "id" => $rowQuery->id_analito,
          "text" => $rowQuery->nom_analito
        ]
      );
    }

    return response($this->array_get, 200);
  }


  public function listHTML(Request $req)
  {
    $analitos = $this->tableAnalito
      ->where([
        ["analito.estado", 1],
      ])
      ->orderBy("analito.nom_analito")
      ->get();

    return view("analito.analitoList")
      ->with("analitos", $analitos);
  }


  public static function list()
  {
    $tableAnalito = new Analito();
    return $tableAnalito
      ->where([
        ["analito.estado", 1],
      ])
      ->orderBy("analito.nom_analito")
      ->get();
  }

  public static function listAnalitosUsed()
  {
    $tableAnalito = new Analito();
    return $tableAnalito
      ->select(
        "analito.*"
      )
      ->join("analito_lab", "analito_lab.analito_id_analito", "=", "analito.id_analito")
      ->where([
        ["analito.estado", 1],
      ])
      ->orderBy("analito.nom_analito")
      ->distinct()
      ->get();
  }


  public static function listAll()
  {
    $tableAnalito = new Analito();
    return $tableAnalito
      ->orderBy("analito.nom_analito")
      ->get();
  }

  public function index(Request $req)
  {
    $analitos = $this->tableAnalito
      ->orderBy("analito.estado", "desc")
      ->orderBy("analito.nom_analito")
      ->get();

    return view("analito.analitoIndex")
      ->with("analitos", $analitos);
  }


  public function sectionAsignacion(Request $req)
  {

    $metodologias = MetodologiaController::listByAsignacionAnalito($req->id_reference);
    $unidades = UnidadController::listByAsignacionAnalito($req->id_reference);
    $temperaturas = TemperaturaController::listByAsignacionAnalito($req->id_reference);
    $analito = AnalitoController::listItem($req->id_reference);

    return view("analito.analitoAsignacion")
      ->with("metodologias", $metodologias)
      ->with("unidades", $unidades)
      ->with("temperaturas", $temperaturas)
      ->with("analito", $analito);
  }


  public static function listItem($id_analito)
  {
    $tableAnalito = new Analito();
    return $tableAnalito
      ->where("analito.id_analito", $id_analito)
      ->first();
  }


  public function asignacion(Request $req)
  {
    $this->eliminarAsignacionesTemperaturas($req->obj_json["id_analito"]);
    $this->eliminarAsignacionesUnidades($req->obj_json["id_analito"]);
    $this->eliminarAsignacionesMetodologias($req->obj_json["id_analito"]);

    if (isset($req->obj_json["temperaturas"])) {
      $this->storeAsignacionesTemperaturas($req->obj_json["id_analito"], $req->obj_json["temperaturas"]);
    }

    if (isset($req->obj_json["unidades"])) {
      $this->storeAsignacionesUnidades($req->obj_json["id_analito"], $req->obj_json["unidades"]);
    }

    if (isset($req->obj_json["metodos"])) {
      $this->storeAsignacionesMetodologias($req->obj_json["id_analito"], $req->obj_json["metodos"]);
    }
  }


  public function eliminarAsignacionesTemperaturas($id_analito)
  {
    DB::table('temperatura_analito')->where('analito_id_analito', '=', $id_analito)->delete();
  }

  public function eliminarAsignacionesUnidades($id_analito)
  {
    DB::table('unidad_analito')->where('analito_id_analito', '=', $id_analito)->delete();
  }

  public function eliminarAsignacionesMetodologias($id_analito)
  {
    DB::table('metodo_analito')->where('analito_id_analito', '=', $id_analito)->delete();
  }


  public function storeAsignacionesTemperaturas($id_analito, $temperaturas)
  {
    foreach ($temperaturas as $temperatura) {
      DB::table('temperatura_analito')->insert(
        [
          'analito_id_analito' => $id_analito,
          'temperatura_id_temperatura' => $temperatura
        ]
      );
    }
  }


  public function storeAsignacionesUnidades($id_analito, $unidades)
  {
    foreach ($unidades as $unidad) {
      DB::table('unidad_analito')->insert(
        [
          'analito_id_analito' => $id_analito,
          'unidad_id_unidad' => $unidad
        ]
      );
    }
  }


  public function storeAsignacionesMetodologias($id_analito, $metodologias)
  {
    foreach ($metodologias as $metodologia) {
      DB::table('metodo_analito')->insert(
        [
          'analito_id_analito' => $id_analito,
          'metodo_id_metodo' => $metodologia
        ]
      );
    }
  }


  public function status(Request $req)
  {
    $statusNow = $this->tableAnalito
      ->where("id_analito", $req->id)
      ->first()
      ->estado;

    $registroUpdate = $this->tableAnalito
      ->where("id_analito", $req->id);

    if ($statusNow == 1) {
      $registroUpdate->update(["estado" => 0]);
    } else {
      $registroUpdate->update(["estado" => 1]);
    }
  }


  public function destroy(Request $req)
  {
    $this->tableAnalito
      ->where("id_analito", $req->id)
      ->delete();
  }


  public function store(AnalitoRequest $req)
  {
    $this->tableAnalito->cod_analito = $req->codigo;
    $this->tableAnalito->nom_analito = $req->nombre;
    $this->tableAnalito->cualitativo = intval($req->cualitativo);
    $this->tableAnalito->save();
  }

  public function edit(Request $req)
  {
    $analito = self::listItem($req->id);

    return view("analito.analitoEdit")
      ->with("analito", $analito)
      ->with("campo", $req->campo);
  }


  public function show(Request $req)
  {
    $analito = self::listItem($req->id);
    return view("analito.analitoShow")
      ->with("analito", $analito)
      ->with("campo", $req->campo);
  }


  public function update(AnalitoRequest $req)
  {
    $analito = $this->tableAnalito
      ->where("id_analito", $req->id)
      ->first();

    switch ($req->campo) {
      case "codigo":
        $analito->update(["cod_analito" => $req->codigo]);
        break;
      case "nombre":
        $analito->update(["nom_analito" => $req->nombre]);
        break;
      case "cualitativo":
        $analito->update(["cualitativo" => intval($req->cualitativo)]);
        break;
    }
  }
}
