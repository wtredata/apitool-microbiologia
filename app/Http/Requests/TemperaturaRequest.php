<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\TemperaturaController;
use App\Temperatura;

class TemperaturaRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Actualizacion
            return [
                'nombre' => [
                    "min:2",
                    "max:50",
                    'unique:mysql.temperatura,nom_temperatura,' . $this->id . ',id_temperatura'
                ],
                "codigo" => [
                    "min:1",
                    "max:7",
                    "unique:mysql.temperatura,cod_temperatura,".$this->id.",id_temperatura"
                ]
            ];
        } else { // Cuando es un registro
            return [
                'nombre' => [
                    "required",
                    "min:2",
                    "max:50",
                    "unique:mysql.temperatura,nom_temperatura"
                ],
                "codigo" => [
                    "required",
                    "min:1",
                    "max:7",
                    "unique:mysql.temperatura,cod_temperatura"
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