<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatrizRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        
        if(isset($this->id)){ // En dado casyo de ser una modificacion
            return [
                'nombre' => 'required|min:5|max:45|unique:mysql.matriz,nom_matriz,' . $this->id . ',id_matriz'
            ];
        } else {
            return [
                'nombre' => 'required|min:5|max:45|unique:mysql.matriz,nom_matriz'
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
            'nombre.min' => 'Debe tener mínimo 5 carácteres',
            'nombre.max' => 'Debe tener máximo 45 carácteres',
            'nombre.unique' => 'El nombre especificado ya se encuentra en uso',
        ];
    }
}