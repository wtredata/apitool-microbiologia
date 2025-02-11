<?php

namespace App\Http\Controllers\comparativaInterlaboratorio;


use App\Helpers\CalcularApLab;
use App\Helpers\GetIdArrayFromControles;
use App\Helpers\VerificarSigmaEnFiltroPorColor;
use App\Helpers\CalcularPorcentajeSesgo;
use App\Helpers\CalcularPer3;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\LaboratorioController;
use  App\Helpers\ConteoPercentil;
use App\Http\Controllers\ConstanteController;
use Illuminate\Http\Request;


class PercentilesInterlaboratorioController extends Controller
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

        $hash_contrasena = password_hash("eyJhbGciOiJIUzI1NiJ9.eyJSb2xlIjoiQWRtaW4iLCJJc3N1ZXIiOiJJc3N1ZXIiLCJVc2VybmFtZSI6IkphdmFJblVzZSIsImV4cCI6MTY0NDQyNDIwNCwiaWF0IjoxNjQ0NDI0MjA0fQ.xKn2OUj27emRNjF-phU0xIsNJK65XNVzjy_3A9dKwHk", PASSWORD_BCRYPT);
        $url =  "https://apa.quik-apps.com.co/api/?password=".$hash_contrasena;
        $tabla_percentiles = json_decode(file_get_contents($url), true);


        $controles = ControlLaboratorioController::listAllByLaboratorioAndSede(
            $laboratorios, $sedes, $ciudades
        );
        $controles_ids = GetIdArrayFromControles::get(
            $controles, $data->control_laboratorio ?? []
        );
        $analitos = AnalitoLaboratorioController::listByControlLaboratorioAndAnalizadorAndAnalito(
            $controles_ids, $analizadores, $analitos
        );

        $data_by_percentil = [
            "labels" => [],
            "data" => [],
        ];

        $datos_conteo_percentil = [
            "total" => 0,
            "verde" => 0,
            "amarillo" =>0,
            "azul" =>0,
            "rojo" =>0,
            "por_verde" =>0,
            "por_amarillo" =>0,
            "por_azul" =>0,
            "por_rojo" =>0,
        ];

        $data_by_percentil['data'][] = [
            "laboratorio" => $laboratorios,
            "sede" => $sedes,
            "ciudad" => $ciudades,
            "analito" => $analitos,
            "analizador" => $analizadores,
        ];

        $conteo_analitos = 0;
        $constante_z = 0;

        foreach ($sedes as $sede) {
            $constante_z = ConstanteController::getBySede($sede);
            foreach ($analitos as $analito) {
                $id_lb = $analito->laboratorio_id_laboratorio;
                $laboratorio = LaboratorioController::listItem($id_lb);
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

                    $conteo_analitos += 1;
                    $sesgo_por = CalcularPorcentajeSesgo::get(
                        $valoresSigmometria["media"], $valoresSigmometria["diana"]
                    );
                    $ap_lab = CalcularApLab::get($constante_z, $sesgo_por, $valoresSigmometria["cv"]);
                    [$nper3, $per3] = CalcularPer3::execute($analito->cod_lote, $analito->nom_analizador, $analito->nom_analito.$nivel, $constante_z, $ap_lab, $tabla_percentiles);
                    if (in_array($per3 . "", $per3s) || in_array("all", $per3s)) {
                        $data_by_percentil['labels'][] = [
                            "indice" => $conteo_analitos,
                            "laboratorio" => $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                            "sede" => $laboratorio->nom_sede,
                            'analito' => $analito->nom_analito,
                            "lote" => $analito->cod_lote,
                            'analizador' => $analito->nom_analizador,
                            "unidades" => $analito->nom_unidad,
                            "metodologia" => $analito->nom_metodo,
                            "valor_limite" => round($valoresSigmometria["valor_limite"] ?? 0, 2),
                            "sigma" => round($valoresSigmometria["sigma"] ?? 0, 2),
                            "sesgo" => $valoresSigmometria["sesgo"],
                            "nivel" => $nivel,
                            "ap_lab" => $ap_lab,
                            "nom_fuente_etmp" => $valoresSigmometria["nom_fuente_etmp"],
                            "cv" => $valoresSigmometria["cv"],
                            "per3" => $per3,
                            "nper3" => $nper3
                        ];
                    }

                    $datos_conteo_percentil = ConteoPercentil::count(
                        $per3 ?? 0,
                        $datos_conteo_percentil
                    );

                    $datos_conteo_percentil = ConteoPercentil::porcentaje(
                        $datos_conteo_percentil
                    );

                }
            }
        }


        return view("comparativo-interlaboratorio/percentiles")
            ->with("data_by_percentil", $data_by_percentil)
            ->with("constante_z", $constante_z)
            ->with("datos_conteo_percentil", $datos_conteo_percentil)
            ->with('datos_filtros', $data)
            ->with("nomSection", "PercentilesInterlaboratorio");
    }
}
