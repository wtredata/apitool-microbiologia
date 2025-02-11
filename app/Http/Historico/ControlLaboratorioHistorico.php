<?php

namespace App\Http\Historico;

// Controladores
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\ControlLaboratorioController;

// Historico
use App\Http\Historico\Historico;

class ControlLaboratorioHistorico extends Historico {

    public static function store($accion, $obj){

        self::SetInformacionLog($accion, $obj);
        
        switch(self::$accion){
            case "store":
                $lote = LoteController::listItem(self::$req->lote)->cod_lote;
                $laboratorio = LaboratorioController::listItem(self::$req->laboratorio)->num_laboratorio;
                self::$tableLog->titulo_id_titulo = 1; // Registro de lote 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "Lote: $lote";
                break;

            case "storeCopiarLote":
                $control_laboratorio_old = ControlLaboratorioController::listItem(self::$req->lote_origen);
                $control_laboratorio_new = LoteController::listItem(self::$req->lote_nuevo);
                $laboratorio = $control_laboratorio_old->num_laboratorio;
                self::$tableLog->titulo_id_titulo = 18; // Copiado de lote 
                self::$tableLog->num_laboratorio = $laboratorio;
                $old_lote = $control_laboratorio_old->cod_lote;
                $new_lote = $control_laboratorio_new->cod_lote;
                self::$tableLog->descripcion = "Lote origen: $old_lote, Lote Nuevo: $new_lote";
                break;

            case "update":
                switch(self::$req->campo){
                    case "lote":
                        self::$tableLog->titulo_id_titulo = 4; // Modificacion de lote de control
                        $lote = ControlLaboratorioController::listItem(self::$req->id)->cod_lote;
                        $laboratorio = ControlLaboratorioController::listItem(self::$req->id)->num_laboratorio;
                        $new_lote = LoteController::listItem(self::$req->lote)->cod_lote;
                        self::$tableLog->num_laboratorio = $laboratorio;
                        self::$tableLog->descripcion = "(Original) Lote: $lote"."\n"."(Nuevo) Lote: $new_lote";
                    break;
                    case "laboratorio":
                        self::$tableLog->titulo_id_titulo = 19; // Modificacion de laboratorio de control
                        $laboratorio = ControlLaboratorioController::listItem(self::$req->id)->num_laboratorio;
                        $new_laboratorio = LaboratorioController::listItem(self::$req->laboratorio)->num_laboratorio;
                        self::$tableLog->num_laboratorio = $laboratorio;
                        self::$tableLog->descripcion = "(Original) Lote: $laboratorio"."\n"."(Nuevo) Lote: $new_laboratorio";
                    break;
                }
                break;

            case "destroy":

                $lote = ControlLaboratorioController::listItem(self::$req->id)->cod_lote;
                $laboratorio = ControlLaboratorioController::listItem(self::$req->id)->num_laboratorio;

                self::$tableLog->titulo_id_titulo = 3; // Eliminacion de lote 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "Lote: $lote";

                break;

            case "status":

                $lote = ControlLaboratorioController::listItem(self::$req->id)->cod_lote;
                $laboratorio = ControlLaboratorioController::listItem(self::$req->id)->num_laboratorio;
                
                self::$tableLog->titulo_id_titulo = 2; // Inactivación / Reactivación de lote 
                self::$tableLog->num_laboratorio = $laboratorio;
                $statusNow = ControlLaboratorioController::listItem(self::$req->id)->estado_control_laboratorio;

                if($statusNow == 1){
                    self::$tableLog->descripcion = "Inactivación, Lote: $lote";
                } else {
                    self::$tableLog->descripcion = "Activación, Lote: $lote";
                }
                break;
        }

        self::$tableLog->save();
    }
}