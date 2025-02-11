<?php

namespace App;

// use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class ResultadoCualitativo extends Model
{
    protected $table = "resultado_cualitativo";
    protected $primaryKey = "id_resultado_cualitativo";
    protected $fillable = ["id_resultado_cualitativo","serie_id_serie","concentracion", "nivel_analito","estado"];
    public $timestamps = false;
}