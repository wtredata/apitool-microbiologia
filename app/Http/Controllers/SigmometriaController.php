<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\ControlLaboratorioController;

// Modelos
use Illuminate\Support\Facades\DB;

// use App\Resultado;

// Helpers
use App\Helpers\FechaDinamica;

// Requests
use Illuminate\Http\Request;

// use Auth;

class SigmometriaController extends Controller
{

  // protected $id_analito_lab;

  private $consenso_amarillo;
  private $consenso_azul;
  private $total_mensurandos;
  private $cont_mensurandos;
  private $total_mensurandos_iet;
  private $consenso_verde;
  private $consenso_iet_verde;
  private $consenso_rojo;
  private $consenso_iet_rojo;

  public function __construct()
  {
    // $this->tableArea = new Area();

    $this->consenso_verde = 0;
    $this->consenso_amarillo = 0;
    $this->consenso_azul = 0;
    $this->consenso_rojo = 0;
    $this->total_mensurandos = 0;
    $this->total_mensurandos_iet = 0;
    $this->cont_mensurandos = 0;
  }

  public function section(Request $req)
  {

    $dia_actual = Date("Y-m-d");
    $fecha_inicial = (isset($req->fecha_inicial) ? $req->fecha_inicial : (FechaDinamica::RestarDias($dia_actual, "30")));
    $fecha_final = (isset($req->fecha_final) ? $req->fecha_final : ($dia_actual));
    $lotes_laboratorio = ControlLaboratorioController::listAllByUsuario();

    return view("sigmometria")
      ->with("nomSection", "SeeSectionSigmometria")
      ->with("lotes_laboratorio", $lotes_laboratorio)
      ->with("fecha_inicial", $fecha_inicial)
      ->with("fecha_final", $fecha_final);
  }


  public function getValoresByControlLaboratorio(Request $req)
  {
    $array_final = $this->getValoresByControlLaboratorioLite($req->id, $req->fecha_inicial, $req->fecha_final);
    return response($array_final, 200);
  }


  public function getValoresByControlLaboratorioLite($id, $fecha_inicial, $fecha_final)
  {

    $analitos_lab = AnalitoLaboratorioController::listByControlLaboratorio($id);
    $constante_z = ConstanteController::getByControlLaboratorio($id);
    $info_control = ControlLaboratorioController::listItemPlus($id);
    $array_final = array(
      "constante_z" => $constante_z,
      "valores_estadisticos" => array(),
      "consenso" => array(),
      "iet" => array(),
      "info_control" => $info_control
    );

    foreach ($analitos_lab as $analito_lab) { // Agregar en orden alfabetico la informacion de cada uno de los analitos
      for ($nivel = 1; $nivel <= $analito_lab->num_niveles; $nivel++) {
        $this->cont_mensurandos++;

        $valoresSigmometria = AnalitoLaboratorioController::getValoresSigmometria($analito_lab->id_analito_lab, $fecha_inicial, $fecha_final, $nivel);

        if ($valoresSigmometria["sesgo"] == null) {
          $et_lab = null;
        } else {
          $et_lab = ($valoresSigmometria["cv"] * $array_final["constante_z"]) + abs($valoresSigmometria["sesgo"]);
        }

        $iet = ((isset($valoresSigmometria["valor_limite"]) && $et_lab != null) ? $et_lab / $valoresSigmometria["valor_limite"] : null);

        $array_final["valores_estadisticos"][] = array(
          "laboratorio" => $analito_lab->num_laboratorio . " - " . $analito_lab->nom_laboratorio,
          "control" => $analito_lab->nom_control,
          "lote" => $analito_lab->cod_lote,
          "fecha_caducidad" => $analito_lab->fecha_vencimiento,
          "num_analito" => $this->cont_mensurandos,
          "analito" => $analito_lab->nom_analito,
          "analizador" => $analito_lab->nom_analizador,
          "unidades" => $analito_lab->nom_unidad,
          "metodologia" => $analito_lab->nom_metodo,
          "reactivo" => $analito_lab->nom_reactivo,
          "temperatura" => $analito_lab->nom_temperatura,
          "nivel" => $nivel,
          "media" => $valoresSigmometria["media"],
          "de" => $valoresSigmometria["de"],
          "cv" => $valoresSigmometria["cv"],
          "diana" => $valoresSigmometria["diana"],
          "sesgo" => $valoresSigmometria["sesgo"],
          "sigma" => $valoresSigmometria["sigma"],
          "puntos_t" => $valoresSigmometria["puntos_t"],
          "puntos_a" => $valoresSigmometria["puntos_a"],
          "puntos_r" => $valoresSigmometria["puntos_r"],
          "nom_fuente_etmp" => $valoresSigmometria["nom_fuente_etmp"],
          "valor_limite" => $valoresSigmometria["valor_limite"],
          "sesgo_mp" => $valoresSigmometria["sesgo_mp"],
          "cv_mp" => $valoresSigmometria["cv_mp"],
          "et_lab" => $et_lab,
          "iet" => $iet
        );


        if ($valoresSigmometria["sigma"] != null) {
          $this->total_mensurandos++;
          if ($valoresSigmometria["sigma"] >= 5) { // Verde
            $this->consenso_verde++;
          } else if ($valoresSigmometria["sigma"] >= 3 && $valoresSigmometria["sigma"] < 5) { // Amarillo
            $this->consenso_amarillo++;
          } else if ($valoresSigmometria["sigma"] >= $array_final["constante_z"] && $valoresSigmometria["sigma"] < 3) { // Azul
            $this->consenso_azul++;
          } else { // Rojo
            $this->consenso_rojo++;
          }
        }

        if ($iet != null) {
          $this->total_mensurandos_iet++;
          if ($iet >= 1) {
            $this->consenso_iet_rojo++;
          } else {
            $this->consenso_iet_verde++;
          }
        }
      }
    }


    $array_final["consenso"]["conteo"] = array(
      "verde" => (isset($this->consenso_verde) ? $this->consenso_verde : 0),
      "amarillo" => (isset($this->consenso_amarillo) ? $this->consenso_amarillo : 0),
      "azul" => (isset($this->consenso_azul) ? $this->consenso_azul : 0),
      "rojo" => (isset($this->consenso_rojo) ? $this->consenso_rojo : 0),
      "total" => (isset($this->total_mensurandos) ? $this->total_mensurandos : 0)
    );

    $array_final["consenso"]["porcentaje"] = array(
      "verde" => (($this->total_mensurandos == 0) ? 0 : ($this->consenso_verde * 100) / $this->total_mensurandos),
      "amarillo" => (($this->total_mensurandos == 0) ? 0 : ($this->consenso_amarillo * 100) / $this->total_mensurandos),
      "azul" => (($this->total_mensurandos == 0) ? 0 : ($this->consenso_azul * 100) / $this->total_mensurandos),
      "rojo" => (($this->total_mensurandos == 0) ? 0 : ($this->consenso_rojo * 100) / $this->total_mensurandos)
    );


    $array_final["iet"]["conteo"] = array(
      "verde" => (isset($this->consenso_iet_verde) ? $this->consenso_iet_verde : 0),
      "rojo" => (isset($this->consenso_iet_rojo) ? $this->consenso_iet_rojo : 0),
      "total" => (isset($this->total_mensurandos_iet) ? $this->total_mensurandos_iet : 0)
    );
    $array_final["iet"]["porcentaje"] = array(
      "verde" => (($this->total_mensurandos_iet == 0) ? 0 : ($array_final["iet"]["conteo"]["verde"] * 100) / $this->total_mensurandos_iet),
      "rojo" => (($this->total_mensurandos_iet == 0) ? 0 : ($array_final["iet"]["conteo"]["rojo"] * 100) / $this->total_mensurandos_iet)
    );

    return $array_final;
  }
}
