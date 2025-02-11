<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\ReactivoController;
use App\Reactivo;

class ReactivoRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Actualizacion
            return [
                'nombre' => [
                    "min:2",
                    "max:70",
                    'unique:mysql.reactivo,nom_reactivo,' . $this->id . ',id_reactivo'
                ],
                "codigo" => [
                    "min:1",
                    "max:7",
                    "unique:mysql.reactivo,cod_reactivo,".$this->id.",id_reactivo"
                ]
            ];
        } else { // Cuando es un registro
            return [
                'nombre' => [
                    "required",
                    "min:2",
                    "max:70",
                    "unique:mysql.reactivo,nom_reactivo"
                ],
                "codigo" => [
                    "required",
                    "min:1",
                    "max:7",
                    "unique:mysql.reactivo,cod_reactivo"
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