<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class PruebaRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        
       /** if(isset($this->id)){
            return [
                'nombre' => 'min:4|max:40|unique:mysql.prueba,nom_prueba,' . $this->id . ',id_prueba',
                'estadoId' => 'integer'
            ];
        } else {
            return [
                'nombre' => 'required|min:4|max:40|unique:mysql.prueba,nom_prueba',
                'estadoId' => 'required|integer'
                
            ];
        } */

        return [];
        
    }
    
    
    public function attributes(){
        return [
            'nombre' => 'nombre'
        ];
    }
    
    public function messages(){
        return [
            'nombre.unique' => 'El nombre especificado ya se encuentra en uso',
            'nombre.required' => 'Campo Obligatorio',
            'nombre.min' => 'Debe tener mínimo 4 carácteres',
            'nombre.max' => 'Debe tener máximo 40 carácteres'
        ];
    }
}