<?php

namespace App;

// use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $table = "resultado";
    protected $primaryKey = "id_resultado";
    protected $fillable = ["id_resultado","serie_id_serie","concentracion", "nivel_analito","estado"];
    public $timestamps = false;
}