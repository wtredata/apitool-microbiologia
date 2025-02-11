<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table = "control";
    protected $primaryKey = "id_control";
    protected $fillable = ["proveedor_id_proveedor", "matriz_id_matriz", "nom_control", "num_niveles", "estado"];
    public $timestamps = false;
}