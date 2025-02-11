<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalitoLaboratorio extends Model
{
    
    protected $table = "analito_lab";
    protected $primaryKey = "id_analito_lab";
    public $timestamps = false;
    protected $fillable = [
        "control_laboratorio_id_control_laboratorio", 
        "analito_id_analito", 
        "analizador_id_analizador", 
        "reactivo_id_reactivo", 
        "generacion_reactivo", 
        "metodo_id_metodo", 
        "unidad_id_unidad", 
        "temperatura_id_temperatura", 
        "tipo_prueba",
        "tipo_prueba_cualitativo",
        "defecto_cualitativo",
        "estado"
    ]; 
}