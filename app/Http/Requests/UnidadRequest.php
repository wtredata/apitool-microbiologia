<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\UnidadController;
use App\Unidad;

class UnidadRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Actualizacion
            return [
                'nombre' => [
                    "min:1",
                    "max:45",
                    'unique:mysql.unidad,nom_unidad,' . $this->id . ',id_unidad'
                ],
                "codigo" => [
                    "min:1",
                    "max:7",
                    "unique:mysql.unidad,cod_unidad,".$this->id.",id_unidad"
                ]
            ];
        } else { // Cuando es un registro
            return [
                'nombre' => [
                    "required",
                    "min:1",
                    "max:45",
                    "unique:mysql.unidad,nom_unidad"
                ],
                "codigo" => [
                    "required",
                    "min:1",
                    "max:7",
                    "unique:mysql.unidad,cod_unidad"
                ]
            ];
        }   
    }
    
    
    public function attributes(){
        return [
            'nombre' => 'nombre',
            'codigo' => 'código',
        ];
    }
    

    public function messages(){
        return [
            'nombre.required' => 'El campo es obligatorio',
            'codigo.required' => 'El campo es obligatorio'
        ];
    }
}