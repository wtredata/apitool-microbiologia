<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Analizador;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\AnalizadorRequest;


class AnalizadorController extends Controller
{
  protected $tableAnalizador;
  protected $array_get;


  public function __construct()
  {
    $this->tableAnalizador = new Analizador();
    $this->array_get = array();
  }


  public function section()
  {
    $analizadores = $this->tableAnalizador
      ->select("*")
      ->orderBy("analizador.estado", "desc")
      ->orderBy("analizador.nom_analizador", "asc")
      ->get();

    return view("analizador.analizadorSection")
      ->with("analizadores", $analizadores)
      ->with("nomSection", "SeeSectionAnalizador");
  }


  public function index(Request $req)
  {

    $analizadores = $this->tableAnalizador
      ->select("*")
      ->orderBy("analizador.estado", "desc")
      ->orderBy("analizador.nom_analizador", "asc")
      ->get();

    return view("analizador.analizadorIndex")
      ->with("analizadores", $analizadores);
  }


  public function store(AnalizadorRequest $req)
  {
    $this->tableAnalizador->nom_analizador = $req->nombre;
    $this->tableAnalizador->cod_analizador = $req->codigo;
    $this->tableAnalizador->save();
  }


  public function destroy(Request $req)
  {
    $this->tableAnalizador
      ->where("id_analizador", $req->id)
      ->delete();
  }

  public static function listItem($id_analizador)
  {
    $tableAnalizador = new Analizador();
    return $tableAnalizador
      ->where("id_analizador", $id_analizador)
      ->first();
  }

  public function status(Request $req)
  {
    $statusNow = $this->tableAnalizador
      ->where("id_analizador", $req->id)
      ->first()
      ->estado;

    $registroUpdate = $this->tableAnalizador
      ->where("id_analizador", $req->id);

    if ($statusNow == 1) {
      $registroUpdate->update(["estado" => 0]);
    } else {
      $registroUpdate->update(["estado" => 1]);
    }
  }


  public function edit(Request $req)
  {
    $analizador = $this->tableAnalizador
      ->where("id_analizador", $req->id)
      ->first();

    return view("analizador.analizadorEdit")
      ->with("analizador", $analizador)
      ->with("campo", $req->campo);
  }


  public function show(Request $req)
  {
    $analizador = $this->tableAnalizador
      ->select("*")
      ->where("analizador.id_analizador", $req->id)
      ->first();

    return view("analizador.analizadorShow")
      ->with("analizador", $analizador)
      ->with("campo", $req->campo);
  }


  public function update(AnalizadorRequest $req)
  {
    $analizador = $this->tableAnalizador
      ->where("id_analizador", $req->id)
      ->first();

    switch ($req->campo) {
      case "nombre":
        $analizador->update(["nom_analizador" => $req->nombre]);
        break;
      case "codigo":
        $analizador->update(["cod_analizador" => $req->codigo]);
        break;
    }
  }


  public static function list()
  {
    $tableAnalizador = new Analizador();
    return $tableAnalizador
      ->select("*")
      ->where("analizador.estado", 1)
      ->orderBy("analizador.nom_analizador", "asc")
      ->get();
  }

  public static function listAnalizadoresUsed()
  {
    $tableAnalizador = new Analizador();
    return $tableAnalizador
      ->select("analizador.*")
      ->join("analito_lab", "analito_lab.analizador_id_analizador", "=", "analizador.id_analizador")
      ->where("analizador.estado", 1)
      ->orderBy("analizador.nom_analizador", "asc")
      ->distinct()
      ->get();
  }


  public static function listAll()
  {
    $tableAnalizador = new Analizador();
    return $tableAnalizador
      ->select("*")
      ->orderBy("analizador.estado", "desc")
      ->orderBy("analizador.nom_analizador", "asc")
      ->get();
  }


  public function listHTML()
  {
    $analizadores = $this->tableAnalizador
      ->select("*")
      ->where("analizador.estado", 1)
      ->orderBy("analizador.nom_analizador", "asc")
      ->get();

    return view("analizador.analizadorList")
      ->with("analizadores", $analizadores);
  }


  public function GetTopAnalizadores(Request $req)
  {
    $search = $req->busqueda;

    $resultQuery = DB::table('analizador')
      ->select("*")
      ->whereRaw("analizador.nom_analizador like '%$search%' and analizador.estado = 1")
      ->orderBy("analizador.nom_analizador", "asc")
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
          "id" => $rowQuery->id_analizador,
          "text" => $rowQuery->nom_analizador
        ]
      );
    }

    return response($this->array_get, 200);
  }
}
