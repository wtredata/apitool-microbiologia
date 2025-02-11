<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use EncryptationId;
    
    protected $table = "rol";
    protected $primaryKey = "id_rol";
    protected $fillable = ["nom_rol"];
    public $timestamps = false;
}