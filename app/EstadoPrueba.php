<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPrueba extends Model
{
    protected $table = "estados_prueba";
    protected $fillable = ['id','nombre'];
    use HasFactory;


    public function pruebas(){
        return $this->hasMany(Prueba::class,'estado_id','id');
    }
}
