<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModoRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        
        if(isset($this->id)){ // En dado casyo de ser una modificacion
            return [
                'nombre' => 'required|min:3|max:40|unique:mysql.modo,nom_modo,' . $this->id . ',id_modo'
            ];
        } else {
            return [
                'nombre' => 'required|min:3|max:40|unique:mysql.modo,nom_modo'
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
            'nombre.required' => 'Campo Obligatorio',
            'nombre.min' => 'Debe tener mínimo 5 carácteres',
            'nombre.max' => 'Debe tener máximo 40 carácteres',
            'nombre.unique' => 'El nombre especificado ya se encuentra en uso',
        ];
    }
}