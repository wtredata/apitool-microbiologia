<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Laboratorio;
use App\Http\Controllers\LaboratorioController;

class LaboratorioRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){

        if(isset($this->id)){
            return [
                'sede' => "numeric",
                'num_laboratorio' => [
                    "numeric",
                    Rule::unique('laboratorio','num_laboratorio'),
                    "min:10000",
                    "max:999999999"
                ],
                'nom_laboratorio' => [
                    "min:5",
                    "max:50",
                    Rule::unique('laboratorio','nom_laboratorio')->where(function ($query) {
                        $laboratorioBD = LaboratorioController::listItem($this->id);
                        return $query->where('sede_id_sede',$laboratorioBD->sede_id_sede);
                    })
                ],
                'tipo' => [
                    "numeric",
                    Rule::unique('laboratorio','principal')->where(function ($query) {
                        $laboratorioBD = LaboratorioController::listItem($this->id);
                        return $query
                            ->where('sede_id_sede',$laboratorioBD->sede_id_sede)
                            ->where('principal', 1);
                    })
                ]
            ];    
            
        } else { // Cuando es un registro
            return [
                'sede' => "required|numeric",
                'num_laboratorio' => [
                    "required",
                    "numeric",
                    "min:10000",
                    "max:999999999",
                    Rule::unique('laboratorio','num_laboratorio')
                ],
                'nom_laboratorio' => [
                    "required",
                    "min:5",
                    "max:50",
                    Rule::unique('laboratorio','nom_laboratorio')->where(function ($query) {
                        return $query->where('sede_id_sede',$this->sede);
                    })
                ],
                'tipo' => [
                    "required",
                    "numeric",
                    Rule::unique('laboratorio','principal')->where(function ($query) {
                        return $query
                            ->where('sede_id_sede',$this->sede)
                            ->where('principal', 1);
                    })
                ]
            ];
        }
    }
    
    
    public function attributes(){
        return [
            'sede' => 'sede',
            'num_laboratorio' => 'número de laboratorio',
            'nom_laboratorio' => 'nombre/descripción',
            'tipo' => 'tipo de laboratorio'
        ];
    }
    

    public function messages(){
        return [
            'sede.required' => 'El campo es obligatorio',
            'num_laboratorio.required' => 'El campo es obligatorio',
            'nom_laboratorio.required' => 'El campo es obligatorio',
            'tipo.required' => 'El campo es obligatorio',
            'num_laboratorio.unique' => 'El número de laboratorio ya se encuentra registrado',
            'nom_laboratorio.unique' => 'El nombre de la sede ya esta registrada para dicha institución',
            'tipo.unique' => 'Ya existe un laboratorio principal para la sede especificada'
        ];
    }
}