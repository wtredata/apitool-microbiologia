<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "pais";
    protected $primaryKey = "id_pais";
    protected $fillable = ["nom_pais"];
    public $timestamps = false;
}