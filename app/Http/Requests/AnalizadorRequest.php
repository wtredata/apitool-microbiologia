<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Analizador;

class AnalizadorRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){

        if(isset($this->id)){ // Actualizacion
            return [
                'nombre' => [
                    "min:2",
                    "max:65",
                    'unique:mysql.analizador,nom_analizador,' . $this->id . ',id_analizador'
                ],
                "codigo" => [
                    "min:1",
                    "max:7",
                    "unique:mysql.analizador,cod_analizador,".$this->id.",id_analizador"
                ]
            ];
            
        } else { // Cuando es un registro
            return [
                'nombre' => [
                    "required",
                    "min:2",
                    "max:65",
                    "unique:mysql.analizador,nom_analizador"
                ],
                "codigo" => [
                    "required",
                    "min:1",
                    "max:7",
                    "unique:mysql.analizador,cod_analizador"
                ]
            ];            
        }   
    }
    
    
    public function attributes(){
        return [
            'nombre' => 'nombre',
            'codigo' => 'código'
        ];
    }
    

    public function messages(){
        return [
            'nombre.required' => 'El campo es obligatorio',
            'codigo.required' => 'El campo es obligatorio'
        ];
    }
}