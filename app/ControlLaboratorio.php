<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class ControlLaboratorio extends Model
{
    use EncryptationId;
    
    protected $table = "control_laboratorio";
    protected $primaryKey = "id_control_laboratorio";
    public $timestamps = false;
    protected $fillable = [
        "laboratorio_id_laboratorio",
        "lote_id_lote",
        "estado"
    ]; 
}