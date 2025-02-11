<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\CiudadController;
use App\Ciudad;

class CiudadRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){

        if(isset($this->id)){ // Cuando es una actualizacion
            return [
                "pais" => [
                    "numeric",
                    Rule::unique('ciudad','pais_id_pais')->where(function ($query) {
                        $ciudadBD = CiudadController::listItem($this->id);
                        return $query
                            ->where('nom_ciudad',$ciudadBD->nom_ciudad);
                    })
                ],
                "nombre" => [
                    "min:4",
                    "max:50",
                    Rule::unique('ciudad','nom_ciudad')->where(function ($query) {
                        $ciudadBD = CiudadController::listItem($this->id);
                        return $query
                            ->where('pais_id_pais',$ciudadBD->id_pais);
                    })
                ]
            ];    
            
        } else { // Cuando es un registro
            return [
                "pais" => [
                    "required",
                    "numeric"
                ],
                "nombre" => [
                    "required",
                    "min:4",
                    "max:50",
                    Rule::unique('ciudad','nom_ciudad')->where(function ($query) {
                        return $query
                            ->where('pais_id_pais',$this->pais);
                    })
                ],
            ];            
        }
        
    }
    
    
    public function attributes(){
        return [
            'pais_id_pais' => 'país',
            'nombre' => 'nombre',
        ];
    }
    

    public function messages(){
        return [
            'pais.required' => 'El campo es obligatorio',
            'nombre.required' => 'El campo es obligatorio',
            'pais.unique' => 'Ya existe una ciudad con las mismas características',
            'nombre.unique' => 'Ya existe una ciudad con las mismas características'
        ];
    }
}