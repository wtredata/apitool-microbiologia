<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\DIANAController;
use App\CambioDIANA;

class DIANARequest extends FormRequest {
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
                    Rule::unique('cambio_diana','fecha_vigencia')->where(function ($query) {

                        $cambio_diana = DIANAController::listItem($this->id);

                        return $query->where([ 
                            ["valor",$cambio_diana->valor]
                        ]);
                    })
                ],
                "valor" => [
                    "numeric",
                    Rule::unique('cambio_diana','valor')->where(function ($query) {

                        $cambio_diana = DIANAController::listItem($this->id);

                        return $query->where([ 
                            ["fecha_vigencia",$cambio_diana->fecha_vigencia]
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

                "fecha_vigencia" => [
                    "required",
                    "date",
                    "date_format:Y-m-d",
                    "before_or_equal:$dia_actual"
                ],
                "nivel_analito" => [
                    "required",
                    "numeric"
                ],
                "valor" => [
                    "required",
                    "numeric",
                    "min:0.01",
                  //  "max:99999.999",
                    function ($attribute, $value, $fail) {

                        $ultimo_cambio_diana = DIANAController::GetUltimoCambioByAnalito($this->analito_laboratorio, $this->nivel_analito);

                        if(isset($ultimo_cambio_diana)){
                            $ultima_diana = $ultimo_cambio_diana->valor;
                        } else {
                            $ultima_diana = null;
                        }

                        if ($value == $ultima_diana) {
                            $fail('El último cambio de valor DIANA tuvo el mismo valor');
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
            "valor" => 'valor DIANA',
            "justificacion" => 'Justificación'
        ];
    }
    

    public function messages(){
        return [
            'analito_laboratorio.required' => 'El campo es obligatorio',
            'fecha_vigencia.required' => 'El campo es obligatorio',
            'valor.required' => 'El campo es obligatorio',
            'nivel_analito.required' => 'El campo es obligatorio',
            'justificacion.required' => 'El campo es obligatorio',
            'valor.unique' => 'Ya existe un cambio de DIANA para el mismo día',
            'fecha_vigencia.unique' => 'Ya existe un cambio de DIANA para el mismo día'
        ];
    }
}
