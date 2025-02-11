<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use EncryptationId;
    
    protected $table = "log";
    protected $primaryKey = "id_log";
    protected $fillable = ["usuario", "fecha", "num_laboratorio", "titulo_id_titulo", "descripcion"];
    public $timestamps = false;
}