<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CambioAPS extends Model
{    
    protected $table = "cambio_aps";
    protected $primaryKey = "id_cambio_aps";
    protected $fillable = [
        "id_cambio_aps", 
        "analito_lab_id_analito_lab", 
        "variabilidad_biologica_id_variabilidad_biologica", 
        "usuario_id_usuario", 
        "fecha_vigencia", 
        "justificacion", 
        "predeterminado"
    ];
    public $timestamps = false;
}