<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriz extends Model
{
    protected $table = "matriz";
    protected $primaryKey = "id_matriz";
    protected $fillable = ["nom_matriz"];
    public $timestamps = false;
}