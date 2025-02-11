<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Modo extends Model
{
    use EncryptationId;
    
    protected $table = "modo";
    protected $primaryKey = "id_modo";
    protected $fillable = ["nom_modo"];
    public $timestamps = false;
}