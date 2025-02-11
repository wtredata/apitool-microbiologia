<?php

    namespace App\Http\Controllers;

    // Controladores
    use App\Http\Controllers\Controller;
    use App\Http\Controllers\AnalitoLaboratorioController;
    use App\Http\Controllers\SerieController;

    // Modelos
    use Illuminate\Support\Facades\DB;
    use App\ResultadoCualitativo;

    // Historicos
    use App\Http\Historico\ResultadoHistorico;

    // Helpers
    use App\Helpers\FechaDinamica;
use App\Http\Historico\AnalitoLaboratorioHistorico;
use App\Http\Requests\AnalitoLaboratorioRequest;
// Requests
    use Illuminate\Http\Request;
    use Auth;

    class ResultadoCualitativoController extends Controller {

        protected $id_analito_lab;

        public function __construct(){

        }

        public function section(Request $req){
            $dia_actual = Date("Y-m-d");
            $fecha_inicial = (isset($req->fecha_inicial) ? $req->fecha_inicial : (FechaDinamica::RestarDias($dia_actual, "30")));
            $fecha_final = (isset($req->fecha_final) ? $req->fecha_final : ($dia_actual));
            return view("resultadoCualitativo")
                 ->with("nomSection","SeeSectionResultadoCualitativo")
                 ->with("id_analito_lab", $req->id_reference)
                 ->with("fecha_inicial", $fecha_inicial)
                 ->with("fecha_final", $fecha_final)
                 ->with("rol_usuario", Auth::user()->rol_id_rol);
        }


        public static function ListByAnalito($id_analito_laboratorio){
            $tableResultado = new ResultadoCualitativo();
            return $tableResultado
                ->select("*")
                ->join("serie", "serie.id_serie", "=", "resultado_cualitativo.serie_id_serie")
                ->where("serie.analito_lab_id_analito_lab", $id_analito_laboratorio)
                ->orderBy("serie.fecha", "desc")
                ->get();
        }


        public static function ListBySerie($id_serie){
            $tableResultado = new ResultadoCualitativo();
            return $tableResultado
                ->select("*")
                ->where("resultado_cualitativo.serie_id_serie", $id_serie)
                ->orderBy("resultado_cualitativo.nivel_analito", "asc")
                ->get();
        }


        public static function ListBySerieNivel($id_serie, $nivel){
            $tableResultado = new ResultadoCualitativo();
            return $tableResultado
                ->select("*")
                ->where([
                    ["resultado_cualitativo.serie_id_serie", $id_serie],
                    ["resultado_cualitativo.nivel_analito", $nivel],
                ])
                ->first();
        }

        
        public static function ListJSONByAnalito($id_analito_laboratorio){

            $return_obj = array();
            $series = SerieController::ListByAnalito($id_analito_laboratorio);

            foreach($series as $index => $serie){

                $resultados = self::ListBySerie($serie->id_serie);
                $array_resultados = array();

                foreach($resultados as $resultado){
                    array_push($array_resultados, array(
                        "id_resultado_cualitativo" => $resultado->id_resultado_cualitativo,
                        "concentracion" => $resultado->concentracion,
                        "nivel_analito" => $resultado->nivel_analito,
                        "estado" => $resultado->estado
                    ));
                }

                $serie_ind = array(
                    "num_serie" => ($index+1),
                    "id_serie" => $serie->id_serie,
                    "id_usuario" => $serie->id_usuario,
                    "nom_usuario" => $serie->nom_usuario,
                    "nombres" => $serie->nombres,
                    "apellidos" => $serie->apellidos,
                    "fecha" => $serie->fecha,
                    "comentario" => $serie->comentario,
                    "correo" => $serie->correo,
                    "iniciales" => $serie->iniciales,
                    "color_hexadecimal" => $serie->color_hexadecimal,
                    "resultados" => $array_resultados
                );

                if (sizeof($array_resultados) > 0) {
                    array_push($return_obj, $serie_ind);
                }

            }

            return $return_obj;
        }
        public static function ListJSONByAnalitoLimitDate($id_analito_laboratorio, $fecha_inicial, $fecha_final){

            $return_obj = array();
            $series = SerieController::ListByAnalitoCualitativo($id_analito_laboratorio, $fecha_inicial, $fecha_final);

            foreach($series as $index => $serie){

                $resultados = self::ListBySerie($serie->id_serie);
                $array_resultados = array();

                foreach($resultados as $resultado){
                    array_push($array_resultados, array(
                        "id_resultado_cualitativo" => $resultado->id_resultado_cualitativo,
                        "concentracion" => $resultado->concentracion,
                        "nivel_analito" => $resultado->nivel_analito,
                        "estado" => $resultado->estado
                    ));
                }

                $serie_ind = array(
                    "num_serie" => ($index+1),
                    "id_serie" => $serie->id_serie,
                    "id_usuario" => $serie->id_usuario,
                    "nom_usuario" => $serie->nom_usuario,
                    "nombres" => $serie->nombres,
                    "apellidos" => $serie->apellidos,
                    "fecha" => $serie->fecha,
                    "comentario" => $serie->comentario,
                    "correo" => $serie->correo,
                    "iniciales" => $serie->iniciales,
                    "color_hexadecimal" => $serie->color_hexadecimal,
                    "resultados" => $array_resultados
                );

                if (sizeof($array_resultados) > 0) {
                    array_push($return_obj, $serie_ind);
                }

            }

            return $return_obj;
        }


        public static function GetPromedios($id_analito_lab, $fecha_inicial, $fecha_final, $nivel){
            $tableResultado = new ResultadoCualitativo();
            
            return $tableResultado
                ->select(
                    DB::raw("avg(resultado_cualitativo.concentracion) as media"),
                    DB::raw("stddev_samp(resultado_cualitativo.concentracion) as de")
                )
                ->join("serie", "serie.id_serie", "=", "resultado_cualitativo.serie_id_serie")
                ->where([
                    ["serie.analito_lab_id_analito_lab", $id_analito_lab],
                    ["resultado_cualitativo.nivel_analito", $nivel],
                    ["resultado_cualitativo.estado", 1]
                ])
                ->whereBetween("serie.fecha", [$fecha_inicial, $fecha_final])
                ->first();
        }


        public static function countPuntosTotales($id_analito_lab, $fecha_inicial, $fecha_final, $nivel){
            $tableResultado = new ResultadoCualitativo();
            
            return $tableResultado
                ->join("serie", "serie.id_serie", "=", "resultado_cualitativo.serie_id_serie")
                ->where([
                    ["serie.analito_lab_id_analito_lab", $id_analito_lab],
                    ["resultado_cualitativo.nivel_analito", $nivel]
                ])
                ->whereBetween("serie.fecha", [$fecha_inicial, $fecha_final])
                ->count();
        }


        public static function countPuntosAprobados($id_analito_lab, $fecha_inicial, $fecha_final, $nivel){
            $tableResultado = new ResultadoCualitativo();
            
            return $tableResultado
                ->join("serie", "serie.id_serie", "=", "resultado_cualitativo.serie_id_serie")
                ->where([
                    ["serie.analito_lab_id_analito_lab", $id_analito_lab],
                    ["resultado_cualitativo.nivel_analito", $nivel],
                    ["resultado_cualitativo.estado", 1]
                ])
                ->whereBetween("serie.fecha", [$fecha_inicial, $fecha_final])
                ->count();
        }


        public static function countPuntosRechazados($id_analito_lab, $fecha_inicial, $fecha_final, $nivel){
            $tableResultado = new ResultadoCualitativo();
            
            return $tableResultado
                ->join("serie", "serie.id_serie", "=", "resultado_cualitativo.serie_id_serie")
                ->where([
                    ["serie.analito_lab_id_analito_lab", $id_analito_lab],
                    ["resultado_cualitativo.nivel_analito", $nivel],
                    ["resultado_cualitativo.estado", 0]
                ])
                ->whereBetween("serie.fecha", [$fecha_inicial, $fecha_final])
                ->count();
        }


        public static function GetJSONValoresEstadisticos($id_analito_lab, $fecha_inicial, $fecha_final, $limite_aps){
            
            $fecha_final = FechaDinamica::HoraNocturna($fecha_final);
            $num_niveles = AnalitoLaboratorioController::listItem($id_analito_lab)->num_niveles;
            $valores_estadisticos = array();

            for($nivel=1; $nivel<=$num_niveles; $nivel++){
                
                $promedios = self::GetPromedios($id_analito_lab, $fecha_inicial, $fecha_final, $nivel);
                $media = (($promedios->media == 0 || !isset($promedios->media)) ? null : $promedios->media);
                $de = (($promedios->de == 0 || !isset($promedios->de)) ? null : $promedios->de);
                $diana = DIANAController::GetDefaultByAnalito($id_analito_lab, $nivel);
                $valor_diana = (isset($diana->valor) ? $diana->valor : null);
                $valor_limite = (isset($limite_aps->valor_limite)) ? $limite_aps->valor_limite : null;

                if($media == null || $de == null){
                    $cv = null;
                } else {
                    $cv = ($de / $media) * 100;
                }

                if($media == null || $valor_diana == null){
                    $sesgo = null;
                } else {
                    $sesgo = (isset($diana->valor) ? ((($media - $valor_diana) / $valor_diana) * 100) : null);
                }

                if($cv == null || $sesgo == null || $valor_limite == null){
                    $sigma = null;
                } else {
                    $sigma = ((isset($limite_aps->valor_limite)) ? (($valor_limite - abs($sesgo)) / $cv) : null); 
                }

                
                $valores_estadisticos[$nivel] = array(
                    "media" => $media,
                    "de" => $de,
                    "cv" => $cv,
                    "diana" => $valor_diana,
                    "sesgo" => $sesgo,
                    "sigma" => $sigma,
                    "puntos_t" => self::countPuntosTotales($id_analito_lab, $fecha_inicial, $fecha_final, $nivel),
                    "puntos_a" => self::countPuntosAprobados($id_analito_lab, $fecha_inicial, $fecha_final, $nivel),
                    "puntos_r" => self::countPuntosRechazados($id_analito_lab, $fecha_inicial, $fecha_final, $nivel)
                );
            }

            return $valores_estadisticos;
        }

        public static function GetJSONValoresEstadisticosNivel($id_analito_lab, $fecha_inicial, $fecha_final, $limite_aps, $nivel){
            $promedios = self::GetPromedios($id_analito_lab, $fecha_inicial, $fecha_final, $nivel);
            $media = (($promedios->media == 0 || !isset($promedios->media)) ? null : $promedios->media);
            $de = (($promedios->de == 0 || !isset($promedios->de)) ? null : $promedios->de);
            $diana = DIANAController::GetDefaultByAnalito($id_analito_lab, $nivel);
            $valor_diana = (isset($diana->valor) ? $diana->valor : null);
            $valor_limite = (isset($limite_aps->valor_limite)) ? $limite_aps->valor_limite : null;

            if($media == null || $de == null){
                $cv = null;
            } else {
                $cv = ($de / $media) * 100;
            }

            if($media == null || $valor_diana == null){
                $sesgo = null;
            } else {
                $sesgo = (isset($diana->valor) ? ((($media - $valor_diana) / $valor_diana) * 100) : null);
            }

            if($cv == null || $sesgo == null || $valor_limite == null){
                $sigma = null;
            } else {
                $sigma = ((isset($limite_aps->valor_limite)) ? (($valor_limite - abs($sesgo)) / $cv) : null); 
            }

            
            return array(
                "media" => $media,
                "de" => $de,
                "cv" => $cv,
                "diana" => $valor_diana,
                "sesgo" => $sesgo,
                "sigma" => $sigma,
                "puntos_t" => self::countPuntosTotales($id_analito_lab, $fecha_inicial, $fecha_final, $nivel),
                "puntos_a" => self::countPuntosAprobados($id_analito_lab, $fecha_inicial, $fecha_final, $nivel),
                "puntos_r" => self::countPuntosRechazados($id_analito_lab, $fecha_inicial, $fecha_final, $nivel)
            );
        }



        public static function GetJSONResultadosAprobados($id_analito_lab, $fecha_inicial, $fecha_final){
            $fecha_final = FechaDinamica::HoraNocturna($fecha_final);
            $num_niveles = AnalitoLaboratorioController::listItem($id_analito_lab)->num_niveles;
            $resultados_aprobados = array();

            for($nivel=1; $nivel<=$num_niveles; $nivel++){

              
                $resultadosNivelTemp = self::getResultadosByNivel($id_analito_lab, $fecha_inicial, $fecha_final, $nivel);

                $resultados_aprobados[$nivel] = array();
                
                foreach($resultadosNivelTemp as $resultadoNivelTemp){
                    array_push(
                        $resultados_aprobados[$nivel], [
                            "fecha" => $resultadoNivelTemp->fecha,
                            "concentracion" => $resultadoNivelTemp->concentracion
                        ]
                    );
                }

            }

            return $resultados_aprobados;
        }

        public static function getResultadosByNivel($id_analito_lab, $fecha_inicial, $fecha_final, $nivel){
            $tableResultado = new ResultadoCualitativo();
            return $tableResultado
                ->select(
                    "serie.fecha",
                    "resultado_cualitativo.concentracion"
                )
                ->join("serie", "serie.id_serie", "=", "resultado_cualitativo.serie_id_serie")
                ->where([
                    ["serie.analito_lab_id_analito_lab", $id_analito_lab],
                    ["resultado_cualitativo.estado", 1],
                    ["resultado_cualitativo.nivel_analito", $nivel]

                ])
                ->whereBetween('serie.fecha', [$fecha_inicial, $fecha_final])
                ->orderBy("serie.fecha", "desc")
                ->get();
        }


        public function actualizarResultados(Request $req){
            $this->id_analito_lab = $req->id_analito_lab;

            foreach($req->resultados as $resultado){

                switch($resultado["tipo"]){
                    case "registro":
                        SerieController::storeCualitativo($resultado, $this->id_analito_lab);
                        break;
                    case "modificacion":
                        ResultadoHistorico::store("modificacion", $resultado);
                        SerieController::updateCualitativo($resultado);
                        break;
                    default:
                        echo "Ocurrio algo inesperado...";
                        break;
                }
            }
        }

        public function actualizarDefectoResultados(Request $req){
            $this->id_analito_lab = $req->id_analito_lab;

            foreach($req->resultados as $resultado){

                switch($resultado["tipo"]){
                    case "modificacion":
                        $reqAL = (object) ["id" => $req->id_analito_lab, "campo" => "defecto_cualitativo", "defecto_cualitativo" => $resultado["defecto_cualitativo"]];
                        AnalitoLaboratorioCualitativoController::updateDefectoCualitativo($reqAL);
                        break;
                    default:
                        echo "Ocurrio algo inesperado...";
                        break;
                }
            }
        }

        public function destroy(Request $req){

            ResultadoHistorico::store("destroy", $req);

            DB::table("serie")
                ->where("id_serie",$req->id)
                ->delete();
        }
        
        public static function storeCuantitativo($serie, $concentracion, $nivel, $estado){
            DB::table('resultado_cualitativo')->insert(
                [
                    'serie_id_serie' => intval($serie), 
                    'concentracion' => ($concentracion),
                    "nivel_analito" => intval($nivel),
                    "estado" => intval($estado)
                ]
            );
        }
        
        
        public static function updateCuantitativo($id_serie, $concentracion, $nivel, $estado){
        
            // Instancia a modelo
            $tableResultado = new ResultadoCualitativo();
    
            // Se busca el resultado en la BD
            $resultadoIndividual = $tableResultado
                ->where([
                    ["serie_id_serie", "=", $id_serie],
                    ["nivel_analito", "=", $nivel]
                ]);
    
            if(isset($concentracion) && $concentracion != "" && $concentracion != null){ // Si existe un resultado definido
                
                if(sizeof($resultadoIndividual->get()) > 0){ // Si hay un resultado encontrado en la BD
                    $resultadoIndividual->update([
                        "concentracion" => ($concentracion),
                        "estado" => intval($estado)
                    ]);
                } else { // Si es necesario registrarlo por que NO existe y esta definido
                    ResultadoCualitativoController::storeCuantitativo($id_serie, $concentracion, $nivel, $estado);
                }
    
            } else { // En dado caso que la celda de modificacion se encuentre vacia
                
                if(sizeof($resultadoIndividual->get()) > 0){ // Si hay un resultado encontrado en la BD
                    $resultadoIndividual->delete();
                }
    
            }
        }
        


    }