<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Metodologia extends Model
{
    use EncryptationId;
    
    protected $table = "metodo";
    protected $primaryKey = "id_metodo";
    protected $fillable = ["cod_metodo","nom_metodo","estado"];
    public $timestamps = false;
}