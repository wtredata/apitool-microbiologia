<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\ControlLaboratorioController;
use App\ControlLaboratorio;

class CopiarLoteRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        return [
            "lote_origen" => [
                "required",
                "numeric"
            ],
            'lote_nuevo' => [
                "required",
                "numeric",
                Rule::unique('control_laboratorio','lote_id_lote')->where(function ($query) {
                    $control_laboratorio = ControlLaboratorioController::listItem($this->lote_origen);
                    return $query->where("laboratorio_id_laboratorio",$control_laboratorio->laboratorio_id_laboratorio);
                })
            ]
        ];
    }
    
    
    public function attributes(){
        return [
            'lote_origen' => 'Lote de origen',
            'lote_nuevo' => 'Lote nuevo'
        ];
    }
    

    public function messages(){
        return [
            'lote_origen.required' => 'El campo es obligatorio',
            'lote_nuevo.required' => 'El campo es obligatorio',
            'lote_nuevo.unique' => 'El lote final ya se encuentra registrado para el mismo laboratorio'
        ];
    }
}