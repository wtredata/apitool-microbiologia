<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedor";
    protected $primaryKey = "id_proveedor";
    protected $fillable = ["nom_proveedor"];
    public $timestamps = false;
}