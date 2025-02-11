<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use EncryptationId;
    
    protected $table = "laboratorio";
    protected $primaryKey = "id_laboratorio";
    public $timestamps = false;
    protected $fillable = [
        "sede_id_sede",
        "num_laboratorio",
        "nom_laboratorio",
        "principal",
        "estado"
    ]; 
}