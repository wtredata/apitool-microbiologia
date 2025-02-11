<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Analito extends Model
{
    use EncryptationId;
    protected $table = "analito";
    protected $primaryKey = "id_analito";
    protected $fillable = ["area_id_area", "nom_analito", "cod_analito", "cualitativo", "estado"];
    public $timestamps = false;
}