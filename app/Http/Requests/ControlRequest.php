<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Control;
use Illuminate\Validation\Rule;
use App\Http\Controllers\ControlController;

class ControlRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    
    public function rules(){
        if(isset($this->id)){ // Se es modificación
            return [
                'proveedor' => [
                    "numeric",
                    Rule::unique('control','proveedor_id_proveedor')->where(function ($query) {
                        $controlBD = ControlController::listItem($this->id);
                        return $query
                            ->where([
                                ["matriz_id_matriz", $controlBD->matriz_id_matriz], 
                                ["nom_control", $controlBD->nom_control], 
                                ["num_niveles", $controlBD->num_niveles]
                            ]);
                    })
                ],
                'matriz' => [
                    "numeric",
                    Rule::unique('control','matriz_id_matriz')->where(function ($query) {
                        $controlBD = ControlController::listItem($this->id);
                        return $query
                            ->where([
                                ["proveedor_id_proveedor", $controlBD->proveedor_id_proveedor], 
                                ["nom_control", $controlBD->nom_control], 
                                ["num_niveles", $controlBD->num_niveles]
                            ]);
                    })
                ],
                'nombre' => [
                    "min:4",
                    "max:50",
                    Rule::unique('control','nom_control')->where(function ($query) {
                        $controlBD = ControlController::listItem($this->id);
                        return $query
                            ->where([
                                ["proveedor_id_proveedor", $controlBD->proveedor_id_proveedor], 
                                ["matriz_id_matriz", $controlBD->matriz_id_matriz], 
                                ["num_niveles", $controlBD->num_niveles]
                        ]);
                    })
                ],
                'numNiveles' => [
                    "numeric",
                    Rule::unique('control','num_niveles')->where(function ($query) {
                        $controlBD = ControlController::listItem($this->id);
                        return $query
                            ->where([
                                ["proveedor_id_proveedor", $controlBD->proveedor_id_proveedor], 
                                ["matriz_id_matriz", $controlBD->matriz_id_matriz], 
                                ["nom_control", $controlBD->nom_control], 
                        ]);
                    })
                ]
            ];
        } else { // Si es registro
            return [
                'proveedor' => [
                    "required",
                    "numeric"
                ],
                'matriz' => [
                    "required",
                    "numeric"
                ],
                'nombre' => [
                    "required",
                    "min:4",
                    "max:50",
                    Rule::unique('control','nom_control')->where(function ($query) {
                        return $query->where([
                            ['proveedor_id_proveedor',$this->proveedor],
                            ['matriz_id_matriz',$this->matriz],
                            ['num_niveles',$this->numNiveles]
                        ]);
                    })
                ],
                'numNiveles' => [
                    "required",
                    "numeric"
                ]
            ];
        }
    }

    
    public function attributes(){
        return [
            'matriz' => 'matriz',
            'numNiveles' => 'número de niveles',
        ];
    }
    
    public function messages(){
        return [

            "proveedor.required" => 'El campo es obligatorio',
            "matriz.required" => 'El campo es obligatorio',
            "nombre.required" => 'El campo es obligatorio',
            "numNiveles.required" => 'El campo es obligatorio',

            'proveedor.numeric' => 'El campo debe ser un identificador válido',
            'matriz.numeric' => 'El campo debe ser un identificador válido',
            'numNiveles.numeric' => 'El campo debe contener sólo números enteros',
            'numNiveles.num_niveles' => 'El campo debe contener sólo números enteros',
        
            "proveedor.unique" => "Ya existe un control con las mismas características",
            "matriz.unique" => "Ya existe un control con las mismas características",
            "nombre.unique" => "Ya existe un control con las mismas características",
            "numNiveles.unique" => "Ya existe un control con las mismas características",
            
            
            "nombre.min" => "El nombre debe tener mínimo 4 carácteres",
            "nombre.max" => "El nombre debe tener máximo 50 carácteres"
        ];
    }
}