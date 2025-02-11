<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class ResultadoCorrida extends Model
{
    use EncryptationId;
    
    protected $table = "resultado_corrida";
    protected $primaryKey = "id_resultado_corrida";
    protected $fillable = [
        "corrida_analito_id_corrida_analito", 
        "usuario_id_usuario", 
        "fecha", 
        "resultado_m1c1", 
        "resultado_m1c2", 
        "resultado_m2c1", 
        "resultado_m2c2", 
        "estado"
    ];
    public $timestamps = false;
}