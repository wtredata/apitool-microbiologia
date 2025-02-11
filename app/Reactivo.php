<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Reactivo extends Model
{
    protected $table = "reactivo";
    protected $primaryKey = "id_reactivo";
    protected $fillable = ["nom_reactivo", "cod_reactivo", "estado"];
    public $timestamps = false;
}