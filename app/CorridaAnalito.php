<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class CorridaAnalito extends Model
{
    use EncryptationId;
    protected $table = "corrida_analito";
    protected $primaryKey = "id_corrida_analito";
    protected $fillable = [
        "corrida_area_id_corrida_area", 
        "analito_id_analito", 
        "estado", 
        "metodologia_prueba", 
        "modo_metodologia_prueba", 
        "unidad_metodologia_prueba", 
        "metodologia_comparacion", 
        "modo_metodologia_comparacion", 
        "unidad_metodologia_comparacion", 
        "analizador_prueba",
        "analizador_comparacion"
    ];
    public $timestamps = false;
}