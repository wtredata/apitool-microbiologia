<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    protected $table = "temperatura";
    protected $primaryKey = "id_temperatura";
    protected $fillable = ["nom_temperatura", "cod_temperatura","estado"];
    public $timestamps = false;
}