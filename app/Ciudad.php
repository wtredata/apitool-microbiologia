<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudad";
    protected $primaryKey = "id_ciudad";
    protected $fillable = ["pais_id_pais", "nom_ciudad", "estado"];
    public $timestamps = false;
}