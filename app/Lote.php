<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $table = "lote";
    protected $primaryKey = "id_lote";
    protected $fillable = ["control_id_control", "cod_lote", "fecha_vencimiento", "estado"];
    public $timestamps = false;
}