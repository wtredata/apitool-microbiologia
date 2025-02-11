<?php

namespace App\Http\Controllers\comparativaInterlaboratorio;

use App\Helpers\CalcularApLab;
use App\Helpers\CalcularCVR;
use App\Helpers\CalcularIET;
use App\Helpers\CalcularPer3;
use App\Helpers\CalcularPorcentajeSesgo;
use App\Helpers\CalcularSR;
use App\Helpers\GetIdArrayFromControles;
use App\Helpers\VerificarSigmaEnFiltroPorColor;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ConstanteController;
use Illuminate\Http\Request;

class MesurandosInterlaboratorioController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = json_decode($request->input('filters'));
        $laboratorios = $data->laboratorio ?? [];
        $sedes = $data->sede ?? [];
        $ciudades = $data->ciudad ?? [];
        $analitos = $data->analito ?? [];
        $analizadores = $data->analizador ?? [];
        $fecha_inicial = $data->fecha_inicial;
        $fecha_final = $data->fecha_final;
        $colores = $data->sigma ?? [];
        $per3s = $data->per3 ?? [];

        $controles = ControlLaboratorioController::listAllByLaboratorioAndSede(
            $laboratorios, $sedes, $ciudades
        );
        $controles_ids = GetIdArrayFromControles::get(
            $controles, $data->control_laboratorio ?? []
        );
        $analitos = AnalitoLaboratorioController::listByControlLaboratorioAndAnalizadorAndAnalito(
            $controles_ids, $analizadores, $analitos
        );

        $data_by_mesurando = array();
        $cont_analitos = 0;

        $hash_contrasena = password_hash("eyJhbGciOiJIUzI1NiJ9.eyJSb2xlIjoiQWRtaW4iLCJJc3N1ZXIiOiJJc3N1ZXIiLCJVc2VybmFtZSI6IkphdmFJblVzZSIsImV4cCI6MTY0NDQyNDIwNCwiaWF0IjoxNjQ0NDI0MjA0fQ.xKn2OUj27emRNjF-phU0xIsNJK65XNVzjy_3A9dKwHk", PASSWORD_BCRYPT);
        $url =  "https://apa.quik-apps.com.co/api/?password=".$hash_contrasena;
        $tabla_percentiles = json_decode(file_get_contents($url), true);

        foreach ($sedes as $sede) {
            $constante_z = ConstanteController::getBySede($sede);

            $by_mesurado = array(
                "constante_z" => $constante_z,
                "valores_estadisticos" => array(),
            );

            foreach ($analitos as $analito) {
                $id_lb = $analito->laboratorio_id_laboratorio;
                $laboratorio = LaboratorioController::listItem($id_lb);
                $ciudad = CiudadController::listItem($laboratorio->ciudad_id_ciudad);

                for ($nivel = 1; $nivel <= $analito->num_niveles; $nivel++) {
                    $valoresSigmometria = AnalitoLaboratorioController::getValoresSigmometria(
                        $analito->id_analito_lab,
                        $fecha_inicial,
                        $fecha_final,
                        $nivel
                    );

                    if (!VerificarSigmaEnFiltroPorColor::exist(
                        round($valoresSigmometria["sigma"] ?? 0, 2),
                        $constante_z,
                        $colores
                    )) {
                        continue;
                    }

                    $cont_analitos += 1;
                    $sesgo_p = CalcularPorcentajeSesgo::get(
                        $valoresSigmometria["media"], $valoresSigmometria["diana"]
                    );
                    $ap_lab = CalcularApLab::get($constante_z, $sesgo_p, $valoresSigmometria["cv"]);
                    [$nper3, $per3] = CalcularPer3::execute($analito->cod_lote, $analito->nom_analizador, $analito->nom_analito.$nivel, $constante_z, $ap_lab, $tabla_percentiles);
                    if(in_array($per3."", $per3s) || in_array("all", $per3s)) {
                        $by_mesurado["valores_estadisticos"][] = array(
                            "indice" => $cont_analitos,
                            "sede" => $laboratorio->nom_sede,
                            "analizador" => $analito->nom_analizador,
                            "num_lab" => $laboratorio->num_laboratorio,
                            "laboratorio" => $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                            "ciudad" => $ciudad->nom_ciudad,
                            "control" => $analito->num_control,
                            "lote" => $analito->cod_lote,
                            "fecha_caducidad" => $analito->fecha_vencimiento,
                            "analito" => $analito->nom_analito,
                            "unidades" => $analito->nom_unidad,
                            "metodo" => $analito->nom_metodo,
                            "nivel" => $nivel,
                            "media" => $valoresSigmometria["media"],
                            "de" => $valoresSigmometria["de"],
                            "cv" => $valoresSigmometria["cv"],
                            "diana" => $valoresSigmometria["diana"],
                            "sesgo" => $valoresSigmometria["sesgo"],
                            "puntos_a" => $valoresSigmometria["puntos_a"],
                            "sesgo_por" => $sesgo_p,
                            "sigma" => $valoresSigmometria["sigma"],
                            "valor_limite" => $valoresSigmometria["valor_limite"],
                            "sesgo_mp" => $valoresSigmometria["sesgo_mp"],
                            "cv_mp" => $valoresSigmometria["cv_mp"],
                            "ap_lab" => round($ap_lab, 2),
                            "cvr" => CalcularCVR::get($valoresSigmometria["cv"], $valoresSigmometria["cv_mp"]),
                            "sr" => CalcularSR::get($sesgo_p, $valoresSigmometria["sesgo_mp"]),
                            "iet" => CalcularIET::get($ap_lab, $valoresSigmometria["valor_limite"]),
                            "per3" => $per3,
                            "nper3" => $nper3
                        );
                    }
                }
            }
            $data_by_mesurando[] = $by_mesurado;
        }

        return view("comparativo-interlaboratorio/mesurandos")
            ->with("data_by_mesurando", $data_by_mesurando)
            ->with("nomSection", "MesurandosInterlaboratorio");
    }

}
