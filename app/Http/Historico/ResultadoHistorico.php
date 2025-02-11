<?php

namespace App\Http\Historico;

// Controladores
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\SerieController;

// Historico
use App\Http\Historico\Historico;

class ResultadoHistorico extends Historico {

    public static function store($accion, $obj){

        self::SetInformacionLog($accion, $obj);
        
        switch(self::$accion){

            case "modificacion":
                $id_analito_lab = SerieController::listItem(self::$req["id_serie"])->id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $resultados = SerieController::toString(self::$req["id_serie"]);

                $num_niveles = SerieController::listItem(self::$req["id_serie"])->num_niveles;
                $new_resultados = self::toStringByDOM(self::$req, $num_niveles);
                
                self::$tableLog->titulo_id_titulo = 9; // Modificacion de resultados 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "(Original $resultados) en Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura" . "\n". "(Actualizado $new_resultados)";
                break;

            case "destroy":
                $id_analito_lab = SerieController::listItem(self::$req->id)->id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $resultados = SerieController::toString(self::$req->id);
                
                self::$tableLog->titulo_id_titulo = 10; // Eliminación de resultados 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "$resultados en Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                
                break;
        }

        self::$tableLog->save();
    }


    public static function toStringByDOM($resultado,$num_niveles){
        $txt = "Fecha: " . $resultado["fecha"] . ", ";
        for($nivel=0; $nivel<$num_niveles; $nivel++){
            $txt .= "Nivel ". ($nivel+1) . ": ";
            if(isset($resultado["resultados"][$nivel])){
                $resultado_nivel = $resultado["resultados"][$nivel]["concentracion"];  
                $resultado_aprob = (($resultado["resultados"][$nivel]["estado"] == 1) ? "SI" : "NO");
            } else {
                $resultado_nivel = "N/A";  
                $resultado_aprob = "N/A";  
            }
            if(($nivel+1)<$num_niveles){
                $txt .= $resultado_nivel. " " . $resultado_aprob . ", ";
            } else {
                $txt .= $resultado_nivel. " " . $resultado_aprob;
            }
        }
        return $txt;
    }
}