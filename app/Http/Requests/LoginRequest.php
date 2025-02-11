<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Usuario;

class LoginRequest extends FormRequest
{
    
    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'usuario' => "required|min:5|max:25|string",
            'password' => "required|min:5|max:30|string",
        ];
    }
    

    public function attributes(){
        return [
            'usuario' => 'nombre de usuario',
            'password' => 'contraseña'
        ];
    }

    
    public function messages(){
        return [
            'usuario.required' => 'El campo de nombre de usuario es obligatorio',
            'password.required' => 'El campo de contraseña es obligatorio',
            
            'usuario.min' => 'El nombre de usuario debe tener mínimo 5 carácteres',
            'password.min' => 'La contraseña debe tener mínimo 5 carácteres',

            'usuario.max' => 'El nombre de usuario debe tener máximo 25 carácteres',
            'password.max' => 'La contraseña debe tener máximo 30 carácteres',

            'usuario.string' => 'El nombre de usuario debe ser de tipo texto',
            'password.string' => 'La contraseña debe ser de tipo texto'
        ];
    }
}