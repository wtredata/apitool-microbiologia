<?php

namespace App;

// use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class VariabilidadBiologica extends Model
{
    protected $table = "variabilidad_biologica";
    protected $primaryKey = "id_variabilidad_biologica";
    protected $fillable = [
        "analito_id_analito", 
        "fuente_etmp_id_fuente_etmp", 
        "valor_limite", 
        "sesgo_mp", 
        "cv_mp", 
        "estado"
    ];
    public $timestamps = false;
}