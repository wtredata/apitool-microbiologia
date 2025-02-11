<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuenteETMP extends Model
{
    protected $table = "fuente_etmp";
    protected $primaryKey = "id_fuente_etmp";
    protected $fillable = ["nom_fuente_etmp"];
    public $timestamps = false;
}