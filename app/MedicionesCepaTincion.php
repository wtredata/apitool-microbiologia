<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicionesCepaTincion extends Model
{
    protected $table = "mediciones_cepas_tincion";
    protected $fillable = ['id','nombre'];
    use HasFactory;

    public function controlCepaTincion(){
        return $this->hasMany(ControlCepaTincion::class,'medicion_id','id');
    }
}
