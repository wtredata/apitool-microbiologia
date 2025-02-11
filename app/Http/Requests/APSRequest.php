<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\APSController;
use App\APS;

class APSRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Actualizacion

            $dia_actual = Date("Y-m-d");

            return [
                "fecha_vigencia" => [
                    "date",
                    "date_format:Y-m-d",
                    "before_or_equal:$dia_actual",
                    Rule::unique('cambio_aps','fecha_vigencia')->where(function ($query) {

                        $cambio_aps = APSController::listItem($this->id);

                        return $query->where([ 
                            ["variabilidad_biologica_id_variabilidad_biologica",$cambio_aps->variabilidad_biologica_id_variabilidad_biologica]
                        ]);
                    })
                ],
                "valor_limite" => [
                    "numeric",
                    Rule::unique('cambio_aps','variabilidad_biologica_id_variabilidad_biologica')->where(function ($query) {

                        $cambio_aps = APSController::listItem($this->id);

                        return $query->where([ 
                            ["fecha_vigencia",$cambio_aps->fecha_vigencia]
                        ]);
                    })
                ],
                "justificacion" => [
                    "string",
                    "min:10",
                    "max:100"
                ]
            ];
        } else { // Cuando es un registro

            $dia_actual = Date("Y-m-d");

            return [
                "analito_laboratorio" => [
                    "required",
                    "numeric"
                ],
                "fecha_vigencia" => [
                    "required",
                    "date",
                    "date_format:Y-m-d",
                    "before_or_equal:$dia_actual"
                ],
                "aps" => [
                    "required",
                    "numeric",
                    function ($attribute, $value, $fail) {
                        $ultimo_cambio_aps = APSController::GetUltimoCambioByAnalito($this->analito_laboratorio);
                        if(isset($ultimo_cambio_aps)){
                            $ultima_variabilidad = $ultimo_cambio_aps->variabilidad_biologica_id_variabilidad_biologica;
                        } else {
                            $ultima_variabilidad = 0;
                        }
                        if ($value == $ultima_variabilidad) {
                            $fail('El último cambio de APS tuvo la misma variabilidad biológica');
                        }
                    }
                ],
                "justificacion" => [
                    "required",
                    "string",
                    "min:10",
                    "max:100"
                ]
            ];
        }   
    }
    
    
    public function attributes(){
        return [
            "analito_laboratorio" => 'Analito de laboratorio',
            "fecha_vigencia" => 'Fecha de vigencia',
            "aps" => 'Variabilidad biológica',
            "justificacion" => 'Justificación'
        ];
    }
    

    public function messages(){
        return [
            'analito_laboratorio.required' => 'El campo es obligatorio',
            'fecha_vigencia.required' => 'El campo es obligatorio',
            'aps.required' => 'El campo es obligatorio',
            'valor_limite.required' => 'El campo es obligatorio',
            'justificacion.required' => 'El campo es obligatorio',
            'aps.unique' => 'Ya existe un cambio de APS para el mismo día',
            'fecha_vigencia.unique' => 'Ya existe un cambio de APS para el mismo día'
        ];
    }
}