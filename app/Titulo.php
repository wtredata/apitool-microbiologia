<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use EncryptationId;
    
    protected $table = "titulo";
    protected $primaryKey = "id_titulo";
    protected $fillable = ["nom_titulo", "administracion"];
    public $timestamps = false;
}