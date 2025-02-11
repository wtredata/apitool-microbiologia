<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Laboratorio;

class UsuarioAsignationLabRequest extends FormRequest {
    public function authorize(){
        return true;
    }

    
    public function rules(){
        return [
            'id_usuario' => "required|min:1|max:40",
            'id_laboratorio' => "required|array", 
            "id_laboratorio.*" => Rule::unique('usuario_laboratorio','laboratorio_id_laboratorio')->where(function ($query) {
                return $query->where('usuario_id_usuario',$this->id_usuario);
            })
        ];    
    }
    
    
    public function attributes(){
        return [
            'id_usuario' => 'usuario',
            'id_laboratorio' => 'número de laboratorio'
        ];
    }
    

    public function messages(){
        return [
            'id_usuario.required' => 'El campo de usuario es obligatorio',
            'id_laboratorio.required' => 'El campo de laboratorio es obligatorio',
            
            'id_usuario.numeric' => 'El campo de usuario debe ser un identificador válido',
            'id_laboratorio.   numeric' => 'El campo de laboratorio debe ser un identificador válido',

            'id_laboratorio.*.unique' => 'Hay uno o más laboratorios que ya se encuentran asignados para el usuario especificado, por favor verifique...'
        ];
    }
}