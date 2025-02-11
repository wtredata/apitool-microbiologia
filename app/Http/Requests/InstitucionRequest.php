<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitucionRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        
        if(isset($this->id)){ // En dado casyo de ser una modificacion
            return [
                'nombre' => 'min:5|max:40|unique:mysql.institucion,nom_institucion,' . $this->id . ',id_institucion',
                'constante_z' => 'numeric|min:0|max:3'
            ];
        } else {
            return [
                'nombre' => 'required|min:5|max:40|unique:mysql.institucion,nom_institucion',
                'constante_z' => 'required|numeric|min:0|max:3'
            ];
        }
        
    }
    
    
    public function attributes(){
        return [
            'nombre' => 'nombre',
            'constante_z' => 'Constante Z',
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