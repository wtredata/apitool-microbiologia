<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\LoteController;
use App\Lote;

class LoteRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){

        if(isset($this->id)){ // Cuando es una actualizacion
            return [
                'control' => [
                    "numeric"
                ],
                'numLote' => [
                    "min:2",
                    "max:30",
                    Rule::unique('lote','cod_lote')
                ],
                'fecha' => [
                    "date",
                    "date_format:Y/m/d"
                ]
            ];
            
        } else { // Cuando es un registro
            return [
                'control' => [
                    "required",
                    "numeric"
                ],
                'numLote' => [
                    "required",
                    "min:2",
                    "max:30",
                    Rule::unique('lote','cod_lote')
                ],
                'fecha' => [
                    "required",
                    "date_format:Y/m/d"
                ]
            ];
        }
        
    }
    
    
    public function attributes(){
        return [
            'control' => 'control de calidad',
            'numLote' => 'número de lote',
            'fecha' => 'fecha de vencimiento'
        ];
    }
    

    public function messages(){
        return [
            "control.required" => "El campo es obligatorio",
            "numLote.required" => "El campo es obligatorio",
            "fecha.required" => "El campo es obligatorio",
            
            "control.numeric" => "El campo debe ser un identificador válido",
            "fecha.date_format" => "Formato de fecha incorrecto",
            
            "numLote.min" => "Debe tener minimo 4 carácteres",
            "numLote.max" => "Debe tener máximo 20 carácteres",

            "numLote.unique" => "Ya existe un lote con el mismo código"
        ];
    }
}