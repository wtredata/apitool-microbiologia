<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\AnalitoController;
use App\Analito;

class AnalitoRequest extends FormRequest {
    
    public function authorize(){
        return true;
    }
    

    public function rules(){
        if(isset($this->id)){
            return [
                "codigo" => [
                    "min:1",
                    "max:7",
                    "unique:mysql.analito,cod_analito"
                ],
                "nombre" => [
                    "min:2",
                    "max:80",
                    "unique:mysql.analito,nom_analito"
                ],
                "cualitativo" => [
                    "numeric",
                    "min:0",
                    "max:1"
                ],
            ]; 
        } else {
            return [
                "codigo" => [
                    "required",
                    "min:1",
                    "max:7",
                    "unique:mysql.analito,cod_analito"
                ],
                "nombre" => [
                    "required",
                    "min:2",
                    "max:80",
                    "unique:mysql.analito,nom_analito"
                ],
                "cualitativo" => [
                    "required",
                    "numeric",
                    "min:0",
                    "max:1"
                ],
            ]; 
        }   
    }
    
    
    public function attributes(){
        return [
            'nombre' => 'nombre'
        ];
    }
    

    public function messages(){
        return [
            "codigo.required" => "El campo es obligatorio",
            "nombre.required" => "El campo es obligatorio",
            "cualitativo.required" => "El campo es obligatorio",
            'nombre.unique' => 'El nombre del analito ya existe'
        ];
    }
}