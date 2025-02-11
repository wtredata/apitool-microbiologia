<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = "institucion";
    protected $primaryKey = "id_institucion";
    protected $fillable = ["nom_institucion", "constante_z", "estado"];
    public $timestamps = false;
}