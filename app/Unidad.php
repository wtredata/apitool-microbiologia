<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use EncryptationId;
    
    protected $table = "unidad";
    protected $primaryKey = "id_unidad";
    protected $fillable = ["nom_unidad", "cod_unidad", "estado"];
    public $timestamps = false;
}