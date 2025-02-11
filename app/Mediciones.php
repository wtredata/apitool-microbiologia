<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediciones extends Model
{
    protected $fillable = ["id","nombre"];
    use HasFactory;

    public function controlCepaMedio(){
        return $this->hasMany(ControlCepaMedio::class,'medicion_id','id');
    }
}
