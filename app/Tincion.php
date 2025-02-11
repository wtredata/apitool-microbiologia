<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tincion extends Model
{
    protected $table = "tinciones";
    protected $primaryKey = "id_tincion";
    protected $fillable = ["nom_tincion", "estado"];
    public $timestamps = false;

    public function comprasLote(){
        return $this->morphToMany(CompraLote::class,'comprables');
    }
}
