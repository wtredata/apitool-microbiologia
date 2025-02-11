<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CambioDIANA extends Model
{    
    protected $table = "cambio_diana";
    protected $primaryKey = "id_cambio_diana";
    protected $fillable = [
        "id_cambio_diana", 
        "analito_lab_id_analito_lab", 
        "usuario_id_usuario", 
        "fecha_vigencia", 
        "justificacion", 
        "valor", 
        "nivel_analito", 
        "predeterminado"
    ];
    public $timestamps = false;
}