<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\VariabilidadBiologica;
use App\Http\Controllers\VariabilidadBiologicaController;

class VariabilidadBiologicaRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){

        if(isset($this->id)){
            return [
                'analito' => [
                    "numeric"
                ],
                'fuente_etmp' => [
                    "numeric",
                    "min:1",
                    Rule::unique('variabilidad_biologica','fuente_etmp_id_fuente_etmp')->where(function ($query) {
                        $variabilidad_biologica_bd = VariabilidadBiologicaController::listItem($this->id);
                        return $query->where('analito_id_analito',$variabilidad_biologica_bd->analito_id_analito);
                    })
                ],
                'valor_limite' => [
                    "nullable",
                    "numeric",
                    "min:0.001",
                    "max:99999.999",

                ],
                'sesgo_mp' => [
                    "nullable",
                    "numeric",
                    "min:0.001",
                    "max:99999.999",
                ],
                'cv_mp' => [
                    "nullable",
                    "numeric",
                    "min:0.001",
                    "max:99999.999",
                ],
            ];
        } else { // Cuando es un registro
            return [
                'analito' => [
                    "required",
                    "numeric"
                ],
                'fuente_etmp' => [
                    "required",
                    "numeric",
                    "min:1",
                    Rule::unique('variabilidad_biologica','fuente_etmp_id_fuente_etmp')->where(function ($query) {
                        return $query->where('analito_id_analito',$this->analito);
                    })
                ],
                'valor_limite' => [
                    "required_without:sesgo_mp,cv_mp",
                    "nullable",
                    "numeric",
                    "min:0.001",
                    "max:99999.999",

                ],
                'sesgo_mp' => [
                    "required_without:valor_limite",
                    "nullable",
                    "numeric",
                    "min:0.001",
                    "max:99999.999",
                ],
                'cv_mp' => [
                    "required_without:valor_limite",
                    "nullable",
                    "numeric",
                    "min:0.001",
                    "max:99999.999",
                ],
            ];
        }
    }
    
    
    public function attributes(){
        return [
            'analito' => 'analito',
            'fuente_etmp' => 'fuente de APS',
            'valor_limite' => 'valor límite'
        ];
    }
    

    public function messages(){
        return [
            'analito.required' => 'El campo es obligatorio',
            'fuente_etmp.required' => 'El campo es obligatorio',
            'valor_limite.required' => 'El campo es obligatorio',
            
            'fuente_etmp.unique' => 'Ya existe una fuente de APS para el mismo analito',

            /*
            'num_laboratorio.unique' => 'El número de laboratorio ya se encuentra registrado',
            'nom_laboratorio.unique' => 'El nombre de la sede ya esta registrada para dicha institución',
            'tipo.unique' => 'Ya existe un laboratorio principal para la sede especificada'
            */
        ];
    }
}