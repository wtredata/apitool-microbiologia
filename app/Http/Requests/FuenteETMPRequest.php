<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuenteETMPRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        
        if(isset($this->id)){ // En dado casyo de ser una modificacion
            return [
                'nombre' => 'required|min:2|max:40|unique:mysql.fuente_etmp,nom_fuente_etmp,' . $this->id . ',id_fuente_etmp'
            ];
        } else {
            return [
                'nombre' => 'required|min:2|max:40|unique:mysql.fuente_etmp,nom_fuente_etmp'
            ];
        }
        
    }
    
    
    public function attributes(){
        return [
            'nombre' => 'nombre',
        ];
    }
    
    public function messages(){
        return [
            'nombre.required' => 'Campo obligatorio',
            'nombre.unique' => 'El nombre especificado ya se encuentra en uso',
        ];
    }
}