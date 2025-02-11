<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class CorridaArea extends Model
{
    use EncryptationId;
    
    protected $table = "corrida_area";
    protected $primaryKey = "id_corrida_area";
    protected $fillable = [
        "laboratorio_id_laboratorio",
        "area_id_area",
        "fecha_inicio",
        "estado"
    ];
    public $timestamps = false;
}