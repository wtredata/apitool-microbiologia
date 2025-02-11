<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Usuario;

class UsuarioRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
        

    public function rules(){

        if(isset($this->id)){
            return [
                'rol' => "numeric",
                'nom_usuario' => "min:5|max:25|regex:/^[0-9a-z.]+$/u|unique:mysql.usuario,nom_usuario",
                'nombres' => "min:3|max:50",
                'apellidos' => "min:3|max:50",
                'correo' => "email|min:10|max:100|unique:mysql.usuario,correo",
            ];
        } else { // Cuando es un registro
            return [
                'rol' => "required|numeric",
                'nom_usuario' => "required|unique:mysql.usuario,nom_usuario|min:5|max:25|regex:/^[0-9a-z.]+$/u",
                'password' => "required|min:8|max:30|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*_\-+=?&])[A-Za-z\d@$!%*_\-+=?&]+$/|confirmed",
                'nombres' => "required|min:3|max:50",
                'apellidos' => "required|min:3|max:50",
                'correo' => "required|email|min:10|max:100|unique:mysql.usuario,correo",
            ]; 
        }
    }
    
    
    public function attributes(){
        return [
            'rol' => 'rol de usuario',
            'nom_usuario' => 'nombre de usuario',
            'password' => 'contraseña',
            'nombres' => 'nombres',
            'apellidos' => 'apellidos',
            'correo' => 'correo electrónico',
        ];
    }
    
    public function messages(){
        return [
            'rol.required' => 'El campo es obligatorio',
            'nom_usuario.required' => 'El campo es obligatorio',
            'password.required' => 'El campo es obligatorio',
            'nombres.required' => 'El campo es obligatorio',
            'apellidos.required' => 'El campo es obligatorio',
            'correo.required' => 'El campo es obligatorio',

            'rol.numeric' => 'El campo debe ser un identificador válido',
            
            'nom_usuario.unique' => 'El nombre de usuario ya se encuentra en uso',
            'correo.unique' => 'El correo electrónico ya se encuentra en uso',

            "nom_usuario.regex" => "El nombre de usuario sólo puede contener letras en minúscula, números y puntos",
            "password.regex" => "La contraseña debe contener mínimo 3 letras entre mayúsculas y minúsculas, un número y un carácter especial"
        ];
    }
}