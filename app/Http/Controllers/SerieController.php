<?php

namespace App\Http\Controllers;

// Controladores
use App\Serie;
use Illuminate\Http\Request;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

// Requests
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\ResultadoController;

// Autenticacion
use Auth;

class SerieController extends Controller{

    public function __construct(){
        // $this->tableArea = new Area();
    }

    public static function ListByAnalito($id_analito_laboratorio){
        $tableSerie = new Serie();
        return $tableSerie
            ->select("*")
            ->join("usuario", "usuario.id_usuario", "=", "serie.usuario_id_usuario")
            ->where("serie.analito_lab_id_analito_lab", $id_analito_laboratorio)
            ->orderBy("serie.fecha", "asc")
            ->get();
    }

    public static function ListByAnalitoCualitativo($id_analito_laboratorio, $fecha_inicial, $fecha_final){
        $tableSerie = new Serie();
        return $tableSerie
            ->select("*")
            ->join("usuario", "usuario.id_usuario", "=", "serie.usuario_id_usuario")
            ->where("serie.analito_lab_id_analito_lab", $id_analito_laboratorio)
            ->whereBetween('serie.fecha', [$fecha_inicial, $fecha_final])
            ->orderBy("serie.fecha", "asc")
            ->get();
    }

    public static function ListItem($id_serie){
        $tableSerie = new Serie();
        return $tableSerie
            ->select("*")
            ->join("analito_lab", "analito_lab.id_analito_lab", "=", "serie.analito_lab_id_analito_lab")
            ->join("control_laboratorio", "control_laboratorio.id_control_laboratorio", "=", "analito_lab.control_laboratorio_id_control_laboratorio")
            ->join("lote", "lote.id_lote", "=", "control_laboratorio.lote_id_lote")
            ->join("control", "control.id_control", "=", "lote.control_id_control")
            ->where("serie.id_serie", $id_serie)
            ->first();
    }


    public static function store($resultado, $id_analito_lab){

        if($resultado["comentario"] == ""){
            $newComentario = "";
        } else {
            $newComentario = self::getComentario($resultado);
        }

        $id_serie = DB::table('serie')->insertGetId(
            [
                'analito_lab_id_analito_lab' => $id_analito_lab, 
                'usuario_id_usuario' => Auth::user()->id_usuario,
                'comentario' => $newComentario,
                "fecha" => $resultado["fecha"]
            ]
        );
        if(is_numeric($id_serie)){
            for($i=0;$i<sizeof($resultado["resultados"]); $i++){
                $conc = $resultado["resultados"][$i]["concentracion"]; 
                if(isset($conc) && $conc != "" && $conc != null){
                    ResultadoController::storeCuantitativo(
                        $id_serie, 
                        $resultado["resultados"][$i]["concentracion"],
                        $resultado["resultados"][$i]["nivel"],
                        $resultado["resultados"][$i]["estado"]
                    );
                }
            }
        } else {
            abort(500);
        }
    }

    public static function storeCualitativo($resultado, $id_analito_lab){

        if($resultado["comentario"] == ""){
            $newComentario = "";
        } else {
            $newComentario = self::getComentario($resultado);
        }

        $id_serie = DB::table('serie')->insertGetId(
            [
                'analito_lab_id_analito_lab' => $id_analito_lab, 
                'usuario_id_usuario' => Auth::user()->id_usuario,
                'comentario' => $newComentario,
                "fecha" => $resultado["fecha"]
            ]
        );
        if(is_numeric($id_serie)){
            for($i=0;$i<sizeof($resultado["resultados"]); $i++){
                $conc = $resultado["resultados"][$i]["concentracion"]; 
                if(isset($conc) && $conc != "" && $conc != null){
                    ResultadoCualitativoController::storeCuantitativo(
                        $id_serie, 
                        $resultado["resultados"][$i]["concentracion"],
                        $resultado["resultados"][$i]["nivel"],
                        $resultado["resultados"][$i]["estado"]
                    );
                }
            }
        } else {
            abort(500);
        }
    }


    public static function toString($id_serie){
        
        $tableSerie = new Serie();
        $serie_bd = self::ListItem($id_serie);

        $txt = "Fecha: " . $serie_bd->fecha . ", ";
        
        for($nivel=1; $nivel<=$serie_bd->num_niveles; $nivel++){
            $txt .= "Nivel ". $nivel . ": ";
            $resultado_bd = ResultadoController::ListBySerieNivel($id_serie, $nivel);
            if(isset($resultado_bd)){
                $resultado_nivel = $resultado_bd->concentracion;  
                $resultado_aprob = (($resultado_bd->estado == 1) ? "SI" : "NO");
            } else {
                $resultado_nivel = "N/A";  
                $resultado_aprob = "N/A";  
            }

            if(($nivel+1)<=$serie_bd->num_niveles){
                $txt .= $resultado_nivel. " " . $resultado_aprob . ", ";
            } else {
                $txt .= $resultado_nivel. " " . $resultado_aprob;
            }
        }
        return $txt; 
    }


    public static function getComentario($resultado){
        $nom_usuario = Auth::user()->nom_usuario;
        $fecha = Date("Y/m/d H:i:s");
        $txt_comentario = $resultado["comentario"]; 
        return "[".$fecha."] ".$nom_usuario.": " .$txt_comentario;
    }


    public static function update($resultado){
        $tableSerie = new Serie();
        $id_serie = $resultado["id_serie"];
        
        $comentarioAnt = $tableSerie->where("id_serie", $id_serie)->first()->comentario;
        
        $newComentario = "";

        if($comentarioAnt == "" && $resultado["comentario"] == ""){ // Si ambos son nulos
            $newComentario = "";
        } else if($comentarioAnt == ""){
            $newComentario = self::getComentario($resultado);
        } else if($resultado["comentario"] == ""){
            $newComentario = $comentarioAnt;
        } else {
            $newComentario = $comentarioAnt . "\r" . self::getComentario($resultado);
        }

        $tableSerie->where("id_serie", $id_serie)->update([
            "fecha" => $resultado["fecha"],
            "comentario" => $newComentario
        ]);

        for($i=0;$i<sizeof($resultado["resultados"]); $i++){
            ResultadoController::updateCuantitativo(
                $id_serie,
                $resultado["resultados"][$i]["concentracion"],
                $resultado["resultados"][$i]["nivel"],
                $resultado["resultados"][$i]["estado"]
            );
        }
    }

    public static function updateCualitativo($resultado){
        $tableSerie = new Serie();
        $id_serie = $resultado["id_serie"];
        
        $comentarioAnt = $tableSerie->where("id_serie", $id_serie)->first()->comentario;
        
        $newComentario = "";

        if($comentarioAnt == "" && $resultado["comentario"] == ""){ // Si ambos son nulos
            $newComentario = "";
        } else if($comentarioAnt == ""){
            $newComentario = self::getComentario($resultado);
        } else if($resultado["comentario"] == ""){
            $newComentario = $comentarioAnt;
        } else {
            $newComentario = $comentarioAnt . "\r" . self::getComentario($resultado);
        }

        $tableSerie->where("id_serie", $id_serie)->update([
            "fecha" => $resultado["fecha"],
            "comentario" => $newComentario
        ]);

        for($i=0;$i<sizeof($resultado["resultados"]); $i++){
            ResultadoCualitativoController::updateCuantitativo(
                $id_serie,
                $resultado["resultados"][$i]["concentracion"],
                $resultado["resultados"][$i]["nivel"],
                $resultado["resultados"][$i]["estado"]
            );
        }
    }
}