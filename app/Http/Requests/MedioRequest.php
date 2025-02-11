<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedioRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        
        if(isset($this->id)){ // En dado caso de ser una modificacion
            return [
                'nombre' => 'min:4|max:40|unique:mysql.medio,nom_medio,' . $this->id . ',id_medio'
            ];
        } else {
            return [
                'nombre' => 'required|min:4|max:40|unique:mysql.medio,nom_medio',
                'caracteristica' => 'required|string'
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
            'nombre.unique' => 'El nombre especificado ya se encuentra en uso',
            'nombre.required' => 'Campo Obligatorio',
            'nombre.min' => 'Debe tener mínimo 4 carácteres',
            'nombre.max' => 'Debe tener máximo 40 carácteres'
        ];
    }
}