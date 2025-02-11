<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $table = "prueba";
    protected $primaryKey = "id_prueba";
    protected $fillable = ["nom_prueba","estado_id"];
    public $timestamps = false;

    public function comprasLote(){
        return $this->morphToMany(CompraLote::class,'comprables');
    }

    public function estado(){
        return $this->belongsTo(EstadoPrueba::class,'estado_id','id');
    }
}