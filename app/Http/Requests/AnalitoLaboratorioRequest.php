<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Analito;

class AnalitoLaboratorioRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){
            return [
                "analito" => [
                    Rule::unique('analito_lab','analito_id_analito')->where(function ($query) {
                        $analito_laboratorio = AnalitoLaboratorioController::listItem($this->id);
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$analito_laboratorio->control_laboratorio_id_control_laboratorio],
                            ["generacion_reactivo",$analito_laboratorio->generacion_reactivo],
                            ["analizador_id_analizador",$analito_laboratorio->analizador_id_analizador],
                            ["reactivo_id_reactivo",$analito_laboratorio->reactivo_id_reactivo],
                            ["metodo_id_metodo",$analito_laboratorio->metodo_id_metodo],
                            ["unidad_id_unidad",$analito_laboratorio->unidad_id_unidad],
                            ["temperatura_id_temperatura",$analito_laboratorio->temperatura_id_temperatura]
                        ]);
                    })
                ],
                "analizador" => [
                    Rule::unique('analito_lab','analizador_id_analizador')->where(function ($query) {
                        $analito_laboratorio = AnalitoLaboratorioController::listItem($this->id);
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$analito_laboratorio->control_laboratorio_id_control_laboratorio],
                            ["generacion_reactivo",$analito_laboratorio->generacion_reactivo],
                            ["analito_id_analito",$analito_laboratorio->analito_id_analito],
                            ["reactivo_id_reactivo",$analito_laboratorio->reactivo_id_reactivo],
                            ["metodo_id_metodo",$analito_laboratorio->metodo_id_metodo],
                            ["unidad_id_unidad",$analito_laboratorio->unidad_id_unidad],
                            ["temperatura_id_temperatura",$analito_laboratorio->temperatura_id_temperatura]
                        ]);
                    })
                ],
                "metodologia" => [
                    Rule::unique('analito_lab','metodo_id_metodo')->where(function ($query) {
                        $analito_laboratorio = AnalitoLaboratorioController::listItem($this->id);
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$analito_laboratorio->control_laboratorio_id_control_laboratorio],
                            ["generacion_reactivo",$analito_laboratorio->generacion_reactivo],
                            ["analito_id_analito",$analito_laboratorio->analito_id_analito],
                            ["reactivo_id_reactivo",$analito_laboratorio->reactivo_id_reactivo],
                            ["analizador_id_analizador",$analito_laboratorio->analizador_id_analizador],
                            ["unidad_id_unidad",$analito_laboratorio->unidad_id_unidad],
                            ["temperatura_id_temperatura",$analito_laboratorio->temperatura_id_temperatura]
                        ]);
                    })
                ],
                "reactivo" => [
                    Rule::unique('analito_lab','reactivo_id_reactivo')->where(function ($query) {
                        $analito_laboratorio = AnalitoLaboratorioController::listItem($this->id);
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$analito_laboratorio->control_laboratorio_id_control_laboratorio],
                            ["generacion_reactivo",$analito_laboratorio->generacion_reactivo],
                            ["analito_id_analito",$analito_laboratorio->analito_id_analito],
                            ["metodo_id_metodo",$analito_laboratorio->metodo_id_metodo],
                            ["analizador_id_analizador",$analito_laboratorio->analizador_id_analizador],
                            ["unidad_id_unidad",$analito_laboratorio->unidad_id_unidad],
                            ["temperatura_id_temperatura",$analito_laboratorio->temperatura_id_temperatura]
                        ]);
                    })
                ],
                "gen_vitros" => [
                    Rule::unique('analito_lab','generacion_reactivo')->where(function ($query) {
                        $analito_laboratorio = AnalitoLaboratorioController::listItem($this->id);
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$analito_laboratorio->control_laboratorio_id_control_laboratorio],
                            ["analito_id_analito",$analito_laboratorio->analito_id_analito],
                            ["analizador_id_analizador",$analito_laboratorio->analizador_id_analizador],
                            ["reactivo_id_reactivo",$analito_laboratorio->reactivo_id_reactivo],
                            ["metodo_id_metodo",$analito_laboratorio->metodo_id_metodo],
                            ["unidad_id_unidad",$analito_laboratorio->unidad_id_unidad],
                            ["temperatura_id_temperatura",$analito_laboratorio->temperatura_id_temperatura]
                        ]);
                    })
                ],
                "unidades" => [
                    Rule::unique('analito_lab','unidad_id_unidad')->where(function ($query) {
                        $analito_laboratorio = AnalitoLaboratorioController::listItem($this->id);
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$analito_laboratorio->control_laboratorio_id_control_laboratorio],
                            ["generacion_reactivo",$analito_laboratorio->generacion_reactivo],
                            ["analito_id_analito",$analito_laboratorio->analito_id_analito],
                            ["metodo_id_metodo",$analito_laboratorio->metodo_id_metodo],
                            ["analizador_id_analizador",$analito_laboratorio->analizador_id_analizador],
                            ["reactivo_id_reactivo",$analito_laboratorio->reactivo_id_reactivo],
                            ["temperatura_id_temperatura",$analito_laboratorio->temperatura_id_temperatura]
                        ]);
                    })
                ],
                "temperatura" => [
                    Rule::unique('analito_lab','temperatura_id_temperatura')->where(function ($query) {
                        $analito_laboratorio = AnalitoLaboratorioController::listItem($this->id);
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$analito_laboratorio->control_laboratorio_id_control_laboratorio],
                            ["generacion_reactivo",$analito_laboratorio->generacion_reactivo],
                            ["analito_id_analito",$analito_laboratorio->analito_id_analito],
                            ["metodo_id_metodo",$analito_laboratorio->metodo_id_metodo],
                            ["analizador_id_analizador",$analito_laboratorio->analizador_id_analizador],
                            ["reactivo_id_reactivo",$analito_laboratorio->reactivo_id_reactivo],
                            ["unidad_id_unidad",$analito_laboratorio->unidad_id_unidad]
                        ]);
                    })
                ]
            ];
        } else {
            return [
                "control_laboratorio" => [
                    "required",
                ],
                "analito" => [
                    "required",
                    Rule::unique('analito_lab','analito_id_analito')->where(function ($query) {
                        return $query->where([ 
                            ["control_laboratorio_id_control_laboratorio",$this->control_laboratorio],
                            ["analizador_id_analizador",$this->analizador],
                            ["reactivo_id_reactivo",$this->reactivo],
                            ["generacion_reactivo",$this->gen_vitros],
                            ["metodo_id_metodo",$this->metodologia],
                            ["unidad_id_unidad",$this->unidades],
                            ["temperatura_id_temperatura",$this->temperatura]
                        ]);
                    })
                ],
                "analizador" => [
                    "required",
                ],
                "metodologia" => [
                    "required",
                ],
                "reactivo" => [
                    "required",
                ],
                "gen_vitros" => [
                    "required_if:check_gen_vitros,on",
                ],
                "unidades" => [
                    "required"
                ]
            ];
        }   
    }
    
    
    public function attributes(){
        return [
            'nombre' => 'nombre'
        ];
    }
    

    public function messages(){
        return [
            "control_laboratorio.required" => 'El campo es obligatorio',
            "analito.required" => 'El campo es obligatorio',
            "analizador.required" => 'El campo es obligatorio',
            "metodologia.required" => 'El campo es obligatorio',
            "reactivo.required" => 'El campo es obligatorio',
            "gen_vitros.required_if" => 'El campo es obligatorio',
            "unidades.required" => 'El campo es obligatorio'
        ];
    }
}