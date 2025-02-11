<?php

namespace App\Http\Historico;

// Controladores
use App\Http\Controllers\APSController;
use App\Http\Controllers\AnalitoLaboratorioController;

// Historico
use App\Http\Historico\Historico;

class APSHistorico extends Historico {

    public static function store($accion, $obj){

        self::SetInformacionLog($accion, $obj);
        
        switch(self::$accion){

            case "update":
                $id_analito_lab = APSController::listItem(self::$req->id)->analito_lab_id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $valor_aps = APSController::listItem(self::$req->id)->valor_limite; 
                $fecha_valor_aps = APSController::listItem(self::$req->id)->fecha_vigencia;
                $justificacion = APSController::listItem(self::$req->id)->justificacion;
                self::$tableLog->titulo_id_titulo = 15; // Modificar informacion del valor APS 
                self::$tableLog->num_laboratorio = $laboratorio;

                switch(self::$req->campo){
                    case "fecha_vigencia":
                        $new_fecha_vigencia = self::$req->fecha_vigencia;
                        self::$tableLog->descripcion = "(Original) ($valor_aps, $fecha_valor_aps, $justificacion) en Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Fecha vigencia: $new_fecha_vigencia";
                        break;
        
                    case "justificacion":
                        $new_justificacion = self::$req->justificacion;
                        self::$tableLog->descripcion = "(Original) ($valor_aps, $fecha_valor_aps, $justificacion) en Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Justificación: $new_justificacion";
                        break;
                }

                break;

            case "destroy":
                $id_analito_lab = APSController::listItem(self::$req->id)->analito_lab_id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $valor_aps = APSController::listItem(self::$req->id)->valor_limite; 
                $fecha_valor_aps = APSController::listItem(self::$req->id)->fecha_vigencia;
                self::$tableLog->titulo_id_titulo = 16; // Eliminar valor APS predeterminado 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "(Valor: $valor_aps, $fecha_valor_aps) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                break;

            case "asignarPredeterminado":
                $id_analito_lab = APSController::listItem(self::$req->id)->analito_lab_id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $valor_aps = APSController::listItem(self::$req->id)->valor_limite; 
                $fecha_valor_aps = APSController::listItem(self::$req->id)->fecha_vigencia;
                self::$tableLog->titulo_id_titulo = 17; // Nuevo valor APS predeterminado 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "(Valor: $valor_aps, $fecha_valor_aps) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                break;
        }

        self::$tableLog->save();
    }
}