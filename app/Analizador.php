<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analizador extends Model
{
    protected $table = "analizador";
    protected $primaryKey = "id_analizador";
    protected $fillable = ["nom_analizador", "cod_analizador", "nom_analizador"];
    public $timestamps = false;
}