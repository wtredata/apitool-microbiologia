<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicionesPrueba extends Model
{
    protected $table = "mediciones_cepas_prueba";
    protected $fillable = ['nombre'];
    use HasFactory;

    public function controlCepaPruebaSensibilidad(){
        return $this->hasMany(controlCepaPruebaSensibilidad::class,'medicion_id','id');
    }
}
