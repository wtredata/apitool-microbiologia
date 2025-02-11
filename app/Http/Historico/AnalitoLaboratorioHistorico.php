<?php

namespace App\Http\Historico;

// Controladores
/*
use App\Http\Controllers\LoteController;
use App\Http\Controllers\LaboratorioController;
*/
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\AnalitoController;
use App\Http\Controllers\AnalizadorController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\ReactivoController;
use App\Http\Controllers\TemperaturaController;


// Historico
use App\Http\Historico\Historico;

class AnalitoLaboratorioHistorico extends Historico {

    public static function store($accion, $obj){

        self::SetInformacionLog($accion, $obj);
        
        switch(self::$accion){
            case "store":
                $lote = ControlLaboratorioController::listItem(self::$req->control_laboratorio)->cod_lote;
                $laboratorio = ControlLaboratorioController::listItem(self::$req->control_laboratorio)->num_laboratorio;
                $analito = AnalitoController::listItem(self::$req->analito)->nom_analito;
                $analizador = AnalizadorController::listItem(self::$req->analizador)->nom_analizador;
                $metodo = MetodologiaController::listItem(self::$req->metodologia)->nom_metodo;
                $unidad = UnidadController::listItem(self::$req->unidades)->nom_unidad;
                $reactivo = ReactivoController::listItem(self::$req->reactivo)->nom_reactivo;
                $temperatura = (isset(TemperaturaController::listItem(self::$req->temperatura)->nom_temperatura) ? TemperaturaController::listItem(self::$req->temperatura)->nom_temperatura : "N/A");
                $generacion = ((self::$req->gen_vitros == NULL) ? "N/A" : self::$req->gen_vitros);
                self::$tableLog->titulo_id_titulo = 5; // Registro de analito de laboratorio 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                break;

            case "update":
                $lote = AnalitoLaboratorioController::listItem(self::$req->id)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem(self::$req->id)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem(self::$req->id)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem(self::$req->id)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem(self::$req->id)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem(self::$req->id)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem(self::$req->id)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem(self::$req->id)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem(self::$req->id)->generacion_reactivo;
                $defecto = AnalitoLaboratorioController::listItem(self::$req->id)->defecto_cualitativo;
                $tipo_prueba = AnalitoLaboratorioController::listItem(self::$req->id)->defecto_cualitativo;
                $tipo_prueba_cualitativo = AnalitoLaboratorioController::listItem(self::$req->id)->defecto_cualitativo;
                self::$tableLog->titulo_id_titulo = 8; // Modificacion de analito de laboratorio
                self::$tableLog->num_laboratorio = $laboratorio;
                
                switch(self::$req->campo){
                    case "analito":
                        $new_analito = AnalitoController::listItem(self::$req->analito)->nom_analito;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Analito: $new_analito";
                        break;
        
                    case "analizador":
                        $new_analizador = AnalizadorController::listItem(self::$req->analizador)->nom_analizador;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Analizador: $new_analizador";
                        break;
        
                    case "metodologia":
                        $new_metodologia = MetodologiaController::listItem(self::$req->metodologia)->nom_metodo;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Metodología: $new_metodologia";
                        break;
        
                    case "reactivo":
                        $new_reactivo = ReactivoController::listItem(self::$req->reactivo)->nom_reactivo;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Reactivo: $new_reactivo";
                        break;
                        
                    case "unidades":
                        $new_reactivo = UnidadController::listItem(self::$req->unidades)->nom_unidad;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Unidad: $new_reactivo";
                        break;

                    case "gen_vitros":
                        $new_gen_vitros = ((self::$req->gen_vitros == NULL) ? "N/A" : self::$req->gen_vitros);
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) G: $new_gen_vitros";
                        break;
        
                    case "temperatura":
                        $new_temperatura = ((self::$req->temperatura == NULL) ? "N/A" : TemperaturaController::listItem(self::$req->temperatura)->nom_temperatura);
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Temp: $new_temperatura";
                        break;
                    case "defecto_cualitativo":
                        $new_defecto = self::$req->defecto_cualitativo;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura, Defecto_cualitativo: $defecto"."\n"."(Nuevo) Defecto_cualitativo: $new_defecto";
                        break;
                    case "tipo_prueba":
                        $new_tipo = self::$req->tipo_prueba;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura, Defecto_cualitativo: $tipo_prueba"."\n"."(Nuevo) Defecto_cualitativo: $new_tipo";
                        break;
                    case "tipo_prueba_cualitativo":
                        $new_tipo = self::$req->tipo_prueba_cualitativo;
                        self::$tableLog->descripcion = "(Original) Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura, Defecto_cualitativo: $tipo_prueba_cualitativo"."\n"."(Nuevo) Defecto_cualitativo: $new_tipo";
                        break;
                    case "control_lab":
                        $old_control_lab = AnalitoLaboratorioController::listItem(self::$req->id)->control_laboratorioid_control_laboratorio;
                        $idNew = self::$req->control_lab;
                        self::$tableLog->descripcion = "(Original) Control_lab: $old_control_lab Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura"."\n"."(Nuevo) Control_lab: $idNew";
                        break;
                }
                break;

            case "destroy":
                $lote = AnalitoLaboratorioController::listItem(self::$req->id)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem(self::$req->id)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem(self::$req->id)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem(self::$req->id)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem(self::$req->id)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem(self::$req->id)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem(self::$req->id)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem(self::$req->id)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem(self::$req->id)->generacion_reactivo;
                self::$tableLog->titulo_id_titulo = 7; // Eliminación de analito de laboratorio 
                self::$tableLog->num_laboratorio = $laboratorio;
                self::$tableLog->descripcion = "Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                break;

            case "status":
                $lote = AnalitoLaboratorioController::listItem(self::$req->id)->cod_lote;
                $laboratorio = AnalitoLaboratorioController::listItem(self::$req->id)->num_laboratorio;
                $analito = AnalitoLaboratorioController::listItem(self::$req->id)->nom_analito;
                $analizador = AnalitoLaboratorioController::listItem(self::$req->id)->nom_analizador;
                $metodo = AnalitoLaboratorioController::listItem(self::$req->id)->nom_metodo;
                $unidad = AnalitoLaboratorioController::listItem(self::$req->id)->nom_unidad;
                $reactivo = AnalitoLaboratorioController::listItem(self::$req->id)->nom_reactivo;
                $temperatura = AnalitoLaboratorioController::listItem(self::$req->id)->nom_temperatura;
                $generacion = AnalitoLaboratorioController::listItem(self::$req->id)->generacion_reactivo;
                self::$tableLog->titulo_id_titulo = 6; // Inactivación / Reactivación de analito de laboratorio 
                self::$tableLog->num_laboratorio = $laboratorio;
                $statusNow = AnalitoLaboratorioController::listItem(self::$req->id)->estado_analito_laboratorio;
                
                if($statusNow == 1){
                    self::$tableLog->descripcion = "Inactivación, Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                } else {
                    self::$tableLog->descripcion = "Activación, Lote: $lote, Analito: $analito, Analizador: $analizador, Reactivo: $reactivo, G: $generacion, Método: $metodo, Unidad: $unidad, Temp: $temperatura";
                }
                break;
        }

        self::$tableLog->save();
    }
}