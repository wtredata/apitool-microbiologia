<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Http\Controllers\SedeController;
use Illuminate\Foundation\Http\FormRequest;
use App\Sede;

class SedeRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Si es modificación
            return [
                'institucion' => [
                    "numeric",
                    Rule::unique('sede','institucion_id_institucion')->where(function ($query) {
                        $sedeBD = SedeController::listItem($this->id);
                        return $query
                            ->where('nom_sede',$sedeBD->nom_sede);
                    })
                ],
                'ciudad' => [
                    "numeric"
                ],
                'nombre' => [
                    "min:2",
                    "max:50",
                    Rule::unique('sede','nom_sede')->where(function ($query) {
                        $sedeBD = SedeController::listItem($this->id);
                        return $query
                            ->where('institucion_id_institucion',$sedeBD->institucion_id_institucion);
                    })
                ],
                'nom_contacto' => [
                    "min:2",
                    "max:70"
                ],
                'tel_contacto' => [
                    "min:2",
                    "max:70",
                ],
                'correo_contacto' => [
                    "email",
                    "min:6",
                    "max:100"
                ],
                'direccion' => [
                    "min:2",
                    "max:100"
                ]
            ];
        } else { // Si se trata de un registro
            return [
                'institucion' => [
                    "required",
                    "numeric"
                ],
                'ciudad' => [
                    "required",
                    "numeric"
                ],
                'nombre' => [
                    "required",
                    "min:2",
                    "max:50",
                    Rule::unique('sede','nom_sede')->where(function ($query) {
                        return $query
                            ->where('institucion_id_institucion',$this->institucion);
                    })
                ],
                'nom_contacto' => [
                    "required",
                    "min:2",
                    "max:70"
                ],
                'tel_contacto' => [
                    "required",
                    "min:2",
                    "max:70",
                ],
                'correo_contacto' => [
                    "required",
                    "email",
                    "min:6",
                    "max:100"
                ],
                'direccion' => [
                    "required",
                    "min:2",
                    "max:100"
                ]
            ];
        }
    }

    
    public function attributes(){
        return [
            "institucion" => "institución",
            "ciudad" => "ciudad",
            "nombre" => "nombre de la sede",
            "nom_contacto" => "nombre de contacto",
            "tel_contacto" => "teléfono de contacto",
            "correo_contacto" => "correo de contacto",
            "direccion" => "dirección de contacto"
        ];
    }
    
    public function messages(){
        return [
            "institucion" => "El campo es obligatorio",
            "ciudad" => "El campo es obligatorio",
            "nombre" => "El campo es obligatorio",
            "nom_contacto" => "El campo es obligatorio",
            "tel_contacto" => "El campo es obligatorio",
            "correo_contacto" => "El campo es obligatorio",
            "direccion" => "El campo es obligatorio",
            
            'institucion.numeric' => 'El campo debe ser un identificador válido',
            'ciudad.numeric' => 'El campo debe ser un identificador válido',
            
            'nombre.unique' => 'El nombre de la sede ya se encuentra registrado para la institución especificada'
        ];
    }
}














