<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = "sede";
    protected $primaryKey = "id_sede";
    protected $fillable = ["institucion_id_institucion", "ciudad_id_ciudad", "nom_sede", "nom_contacto", "tel_contacto", "correo_contacto", "direccion", "estado"];
    public $timestamps = false;
}