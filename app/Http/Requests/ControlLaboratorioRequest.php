<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\ControlLaboratorioController;
use App\ControlLaboratorio;

class ControlLaboratorioRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Modificacion
            return [
                "laboratorio" => [
                    "numeric",
                    Rule::unique('control_laboratorio','laboratorio_id_laboratorio')->where(function ($query){
                        $control_laboratorio = ControlLaboratorioController::listItem($this->id);
                        return $query->where("lote_id_lote",$control_laboratorio->lote_id_lote);
                    })
                ],
                'lote' => [
                    "numeric",
                    Rule::unique('control_laboratorio','lote_id_lote')->where(function ($query){
                        $control_laboratorio = ControlLaboratorioController::listItem($this->id);
                        return $query->where("laboratorio_id_laboratorio",$control_laboratorio->laboratorio_id_laboratorio);
                    })
                ]
            ];
        } else {
            return [
                "laboratorio" => [
                    "required",
                    "numeric"
                ],
                'lote' => [
                    "required",
                    "numeric",
                    Rule::unique('control_laboratorio','lote_id_lote')->where(function ($query) {
                        return $query->where("laboratorio_id_laboratorio",$this->laboratorio);
                    })
                ]
            ];
        }   
    }
    
    
    public function attributes(){
        return [
            'laboratorio' => 'Laboratorio',
            'lote' => 'lote'
        ];
    }
    

    public function messages(){
        return [
            'laboratorio.required' => 'El campo es obligatorio',
            'lote.required' => 'El campo es obligatorio',
            
            'lote.unique' => 'El lote ya existe para el laboratorio especificado',
        ];
    }
}