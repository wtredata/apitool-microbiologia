<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Usuario;

class UsuarioPassRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
        

    public function rules(){
        return [
            // 'password' => "min:8|max:30|regex:/^(?=(.*[A-Z]){1,})(?=(.*[a-z]){2,})(?=.*\d)(?=.*[!@#$%^&*()_\-+={}[\]|\:\";'<>,.?\/])(?=.*[a-zA-Z]).{8,}$/|confirmed"
            // 'required',
            // 'string',
            'password' => "required|min:8|max:30|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*_\-+=?&])[A-Za-z\d@$!%*_\-+=?&]+$/|confirmed"
        ];
    }
    
    
    public function attributes(){
        return [
            'password' => 'contraseña'
        ];
    }
    
    public function messages(){
        return [
            'password.required' => 'El campo es obligatorio',
            "password.regex" => "La contraseña debe contener mínimo 3 letras entre mayúsculas y minúsculas, un número y un carácter especial"
        ];
    }
}