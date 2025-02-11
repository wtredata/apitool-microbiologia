<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\MetodologiaController;
use App\Metodologia;

class MetodologiaRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Actualizacion
            return [
                'nombre' => [
                    "min:2",
                    "max:80",
                    'unique:mysql.metodo,nom_metodo,' . $this->id . ',id_metodo'
                ],
                "codigo" => [
                    "min:1",
                    "max:7",
                    "unique:mysql.metodo,cod_metodo,".$this->id.",id_metodo"
                ]
            ];
        } else { // Cuando es un registro
            return [
                'nombre' => [
                    "required",
                    "min:2",
                    "max:80",
                    "unique:mysql.metodo,nom_metodo"
                ],
                "codigo" => [
                    "required",
                    "min:1",
                    "max:7",
                    "unique:mysql.metodo,cod_metodo"
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