<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

/*
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\SegmentacionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AreaLaboratorioController;
*/

// Modelos
/*
use Illuminate\Support\Facades\DB;
use App\Institucion;
use App\Ciudad;
use App\Segmentacion;
use App\Usuario;
*/


use App\Sede;

//use App\Http\Controllers\SedeController;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\SedeRequest;


class SedeController extends Controller
{
  protected $tableSede; // Table Sede

  public function __construct()
  {
    $this->tableSede = new Sede();
  }


  public function section()
  {
  }


  public function index(Request $req)
  {
    $sedes = $this->tableSede
      ->select(
        "*",
        "sede.estado as sede_estado"
      )
      ->join('institucion', 'sede.institucion_id_institucion', '=', 'institucion.id_institucion')
      ->join('ciudad', 'sede.ciudad_id_ciudad', '=', 'ciudad.id_ciudad')
      ->orderBy("sede.estado", "desc")
      ->orderBy("institucion.nom_institucion", "asc")
      ->orderBy("sede.nom_sede", "asc")
      ->where("institucion.id_institucion", $req->id)
      ->get();

    return view("sede.sedeIndex")
      ->with("sedes", $sedes);
  }


  public function store(SedeRequest $req)
  {
    $this->tableSede->institucion_id_institucion = $req->institucion;
    $this->tableSede->ciudad_id_ciudad = $req->ciudad;
    $this->tableSede->nom_sede = $req->nombre;
    $this->tableSede->nom_contacto = $req->nom_contacto;
    $this->tableSede->tel_contacto = $req->tel_contacto;
    $this->tableSede->correo_contacto = $req->correo_contacto;
    $this->tableSede->direccion = $req->direccion;
    $this->tableSede->save();
  }


  public static function list()
  {
    $tableSede = new Sede();
    return $tableSede
      ->join("institucion", "institucion.id_institucion", "=", "sede.institucion_id_institucion")
      ->where("sede.estado", 1)
      ->orderBy("institucion.id_institucion", "asc")
      ->orderBy("sede.nom_sede", "asc")
      ->get();
  }

  public static function listItem($id)
  {
    $tableSede = new Sede();
    return $tableSede
      ->join("institucion", "institucion.id_institucion", "=", "sede.institucion_id_institucion")
      ->where([
        ["sede.estado", 1],
        ["sede.id_sede", $id]
      ])
      ->orderBy("institucion.id_institucion", "asc")
      ->orderBy("sede.nom_sede", "asc")
      ->first();
  }

  public static function listSedeByUser($id)
  {
    $tableSede = new Sede();
    return $tableSede
      ->select(
        "sede.*",
        "institucion.*"
      )
      ->join("laboratorio", "laboratorio.sede_id_sede", "=", "sede.id_sede")
      ->join("laboratorio_usuario", "laboratorio_usuario.laboratorio_id_laboratorio", "=", "laboratorio.id_laboratorio")
      ->join("institucion", "institucion.id_institucion","=", "sede.institucion_id_institucion")
      ->where([
        ["laboratorio_usuario.usuario_id_usuario", $id],
        ["laboratorio.estado", 1],
        ["sede.estado", 1]
      ])
      ->distinct()
      ->get();
  }


  /*
  public static function listByLaboratorio($id_laboratorio){
      $tableSede = new Sede();
      return $tableSede
          ->select(
              "sede.id_sede"
          )
          ->join("laboratorio","sede.id_sede","=","laboratorio.sede_id_sede")
          ->where("laboratorio.id_laboratorio", $id_laboratorio)
          ->first();
  }
  */

  /*

  */

  public function listHTML()
  {
    $sedes = $this->tableSede
      ->select(
        "sede.id_sede",
        "institucion.nom_institucion",
        "sede.nom_sede"
      )
      ->join("institucion", "institucion.id_institucion", "=", "sede.institucion_id_institucion")
      ->where("sede.estado", 1)
      ->orderBy("institucion.id_institucion", "asc")
      ->orderBy("sede.nom_sede", "asc")
      ->get();

    return view("sede.sedeList")
      ->with("sedes", $sedes);
  }


  public function destroy(Request $req)
  {
    $this->tableSede
      ->where("id_sede", $req->id)
      ->delete();
  }


  public function status(Request $req)
  {
    $statusNow = $this->tableSede
      ->where("id_sede", $req->id)
      ->first()
      ->estado; // Seleccionar el estado de la institucion que sea igual a la indicada

    $registroUpdate = $this->tableSede
      ->where("id_sede", $req->id);

    if ($statusNow == 1) {
      $registroUpdate->update(["estado" => 0]);
    } else {
      $registroUpdate->update(["estado" => 1]);
    }
  }


  public function edit(Request $req)
  {

    $sede = $this->tableSede
      ->where("id_sede", $req->id)
      ->first();

    switch ($req->campo) {
      case "institucion":
        $instituciones = InstitucionController::list();
        return view("sede.sedeEdit")
          ->with("instituciones", $instituciones)
          ->with("campo", $req->campo)
          ->with("sede", $sede);
        break;

      case "ciudad":
        $ciudades = CiudadController::list();
        return view("sede.sedeEdit")
          ->with("ciudades", $ciudades)
          ->with("campo", $req->campo)
          ->with("sede", $sede);
        break;

      case "nombre":
        return view("sede.sedeEdit")
          ->with("campo", $req->campo)
          ->with("sede", $sede);
        break;

      case "nom_contacto":
        return view("sede.sedeEdit")
          ->with("campo", $req->campo)
          ->with("sede", $sede);
        break;

      case "tel_contacto":
        return view("sede.sedeEdit")
          ->with("campo", $req->campo)
          ->with("sede", $sede);
        break;

      case "correo_contacto":
        return view("sede.sedeEdit")
          ->with("campo", $req->campo)
          ->with("sede", $sede);
        break;

      case "direccion":
        return view("sede.sedeEdit")
          ->with("campo", $req->campo)
          ->with("sede", $sede);
        break;

      default:
        abort(500, "Opción de modificación no encontrada");
        break;
    }
  }


  public function show(Request $req)
  {
    $sede = $this->tableSede
      ->select(
        "*",
        "sede.estado as sede_estado"
      )
      ->join('institucion', 'sede.institucion_id_institucion', '=', 'institucion.id_institucion')
      ->join('ciudad', 'sede.ciudad_id_ciudad', '=', 'ciudad.id_ciudad')
      ->where("id_sede", $req->id)
      ->first();

    return view("sede.sedeShow")
      ->with("sede", $sede)
      ->with("campo", $req->campo);
  }


  public function update(SedeRequest $req)
  {
    $sede = $this->tableSede
      ->where("id_sede", $req->id)
      ->first(); // Se selecciona la institucion a la cual se desea realizar la actualización

    switch ($req->campo) {
      case "institucion":
        $sede->update(["institucion_id_institucion" => $req->institucion]);
        break;

      case "ciudad":
        $sede->update(["ciudad_id_ciudad" => $req->ciudad]);
        break;

      case "nombre":
        $sede->update(["nom_sede" => $req->nombre]);
        break;

      case "nom_contacto":
        $sede->update(["nom_contacto" => $req->nom_contacto]);
        break;

      case "tel_contacto":
        $sede->update(["tel_contacto" => $req->tel_contacto]);
        break;

      case "correo_contacto":
        $sede->update(["correo_contacto" => $req->correo_contacto]);
        break;

      case "direccion":
        $sede->update(["direccion" => $req->direccion]);
        break;

      default:
        abort(500, "Opción de modificación no encontrada");
        break;
    }
  }
}
