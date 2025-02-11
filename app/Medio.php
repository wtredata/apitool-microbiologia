<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medio extends Model
{
    protected $table = "medio";
    protected $primaryKey = "id_medio";
    protected $fillable = ["nom_medio","caracteristica"];
    public $timestamps = false;
    
    public function comprasLote(){
        return $this->morphToMany(CompraLote::class,'comprables');
    }
}