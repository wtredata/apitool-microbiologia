<?php

namespace App\Http\Historico;

// Controladores
use App\Http\Controllers\DIANAController;
use App\Http\Controllers\AnalitoLaboratorioController;

// Historico
use App\Http\Historico\Historico;

class DIANAHistorico extends Historico {

    public static function store($accion, $obj){

        self::SetInformacionLog($accion, $obj);
        
        switch(self::$accion){

            case "update":
                $id_analito_lab = DIANAController::listItem(self::$req->id)->analito_lab_id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $valor_diana = DIANAController::listItem(self::$req->id)->valor; 
                $nivel = DIANAController::listItem(self::$req->id)->nivel_analito;
                $fecha_valor_diana = DIANAController::listItem(self::$req->id)->fecha_vigencia;
                $justificacion = DIANAController::listItem(self::$req->id)->justificacion;
                self::$tableLog->titulo_id_titulo = 12; // Modificacion de valor DIANA para analito de laboratorio
                self::$tableLog->num_laboratorio = $laboratorio;
                
                switch(self::$req->campo){
                    case "fecha_vigencia":
                        $new_fecha_vigencia = self::$req->fecha_vigencia;
                        self::$tableLog->descripcion = "(Original) (Nivel $nivel = $valor_diana, $fecha_valor_diana, $justificacion) en Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Fecha vigencia: $new_fecha_vigencia";
                        break;
        
                    case "justificacion":
                        $new_justificacion = self::$req->justificacion;
                        self::$tableLog->descripcion = "(Original) (Nivel $nivel = $valor_diana, $fecha_valor_diana, $justificacion) en Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Justificación: $new_justificacion";
                        break;
                }
                break;

            case "destroy":
                $id_analito_lab = DIANAController::listItem(self::$req->id)->analito_lab_id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $valor_diana = DIANAController::listItem(self::$req->id)->valor; 
                $nivel = DIANAController::listItem(self::$req->id)->nivel_analito;
                $fecha_valor_diana = DIANAController::listItem(self::$req->id)->fecha_vigencia;
                self::$tableLog->titulo_id_titulo = 13; // Eliminación de valor DIANA 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "(Nivel $nivel = $valor_diana, $fecha_valor_diana) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                break;

            case "asignarPredeterminado":
                $id_analito_lab = DIANAController::listItem(self::$req->id)->analito_lab_id_analito_lab;
                $lote = AnalitoLaboratorioController::listItem($id_analito_lab)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem($id_analito_lab)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem($id_analito_lab)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem($id_analito_lab)->generacion_reactivo;
                $valor_diana = DIANAController::listItem(self::$req->id)->valor; 
                $nivel = DIANAController::listItem(self::$req->id)->nivel_analito; 
                $fecha_valor_diana = DIANAController::listItem(self::$req->id)->fecha_vigencia;
                self::$tableLog->titulo_id_titulo = 14; // Nuevo valor DIANA predeterminado 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "(Nivel $nivel = $valor_diana, $fecha_valor_diana) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                break;
        }

        self::$tableLog->save();
    }
}